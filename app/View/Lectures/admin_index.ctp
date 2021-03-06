<?php echo $this->Html->script('vendor/jquery.mjs.nestedSortable'); ?>
<?php echo $this->Html->script('vendor/mustache'); ?>
<?php echo $this->Html->css('listings/index'); ?>

<div class="row-fluid">
    <div class="content-padding">

        <?php echo $this->Form->create('Lecture', array('action' => 'add', 'id' => 'formListing', 'class' => 'hero-unit')); ?>
        <legend><?php echo __('Veranstaltung Anlegen'); ?></legend>
        <p class="text-info"><?php echo __('Zum Filtern der Menüpunkte bitte Semester und Kategorie wählen'); ?></p>

        <div class="row-fluid">
            <div class="span3">
                <label><?php echo __('Name'); ?></label>
                <?php echo $this->Form->input('name', array('class' => 'input-xxl', 'name' => 'name', 'div' => false, 'label' => false, 'required' => true, 'placeholder' => '')); ?>

                <label><?php echo __('Video Id'); ?></label>
                <?php echo $this->Form->input('code', array('class' => 'input-xxl', 'name' => 'code', 'div' => false, 'label' => false, 'placeholder' => '')); ?>
            </div>

            <div class="span3">
                <label><?php echo __('Semester'); ?></label>
                <?php echo $this->Form->input('term_id', array('class' => 'input-xxl', 'name' => 'term_id', 'div' => false, 'label' => false, 'empty' => 'Semesterübergreifend', 'default' => key($terms))); ?>

                <label><?php echo __('Kategorie'); ?></label>
                <?php echo $this->Form->input('category_id', array('class' => 'input-xxl', 'name' => 'category_id', 'div' => false, 'label' => false, 'required' => true)); ?>
            </div>

            <div class="span3">
                <label><?php echo __('Anbieter'); ?></label>
                <?php echo $this->Form->input('provider_id', array('class' => 'input-xxl', 'name' => 'provider_id', 'div' => false, 'label' => false, 'empty' => true)); ?>

                <span class="form-inline">
                        <label class="checkbox">
                            <?php echo $this->Form->input('inactive', array('name' => 'inactive', 'div' => false, 'label' => __('Inaktiv'), 'type' => 'checkbox')); ?>
                        </label>

                        <label class="checkbox">
                            <?php echo $this->Form->input('dynamic_view', array('name' => 'dynamic_view', 'label' => __('Dyn. Anz.'), 'div' => false, 'type' => 'checkbox')); ?>
                        </label>

                        <label class="checkbox">
                            <?php echo $this->Form->input('invert_sorting', array('name' => 'invert_sorting', 'label' => __('Sort. Invert.'), 'div' => false, 'type' => 'checkbox')); ?>
                        </label>
                    </span>
            </div>

        </div>
        <input type="submit" class="btn btn-primary" value="<?php echo __('Speichern'); ?>"/>
        <?php echo $this->Form->end(); ?>

        <?php echo $this->Form->create('lectures', array('action' => 'edit', 'class' => 'form hero-unit', 'action' => 'edit')); ?>
        <fieldset>

            <legend>
                <?php echo __('Menüpunkte'); ?>
                <p class="text-info"><?php echo __('Umsortierungen werden sofort gespeichert, bei Fehlern werden Sie benachrichtigt'); ?></p>
            </legend>

            <ul id="listings" class="sortable">
                <li><h3><?php echo __('Lade...'); ?></h3></li>
            </ul>

            <div class="form-actions">
                <input type="submit" class="btn btn-primary" value="<?php echo __('Speichern'); ?>"/>
            </div>

        </fieldset>
        <?php echo $this->Form->end(); ?>
    </div>
</div>

<style>
ul#listings li ul li label.inactive,
ul#listings li ul li label.dynamic-view {
    display: none !important;
}
</style>

<script id="listItem" type="text/html">
<li class="{{className}}" id="listing_{{id}}">
    <div class="form-inline">
        <span class="mover icon-move"></span>
        <?php echo $this->Form->hidden('Lecture.{{id}}.id', array('label' => false, 'value' => '{{id}}', 'div' => false)); ?>
        <?php echo $this->Form->input('Lecture.{{id}}.name', array('label' => false, 'value' => '{{name}}', 'div' => false, 'class' => 'span4 name')); ?>
        <?php echo $this->Form->input('Lecture.{{id}}.code', array('label' => false, 'value' => '{{code}}', 'div' => false, 'class' => 'span2 code')); ?>

        <span class="pull-right">
            <span class="label {{provider_class}}">{{provider_name}}</span>

            <label class="checkbox inactive">
                <input type="checkbox" name="data[Listing][{{id}}][inactive]" {{inactive}} />
                <?php echo __('Inactive?'); ?>
            </label>&nbsp;&nbsp;

            <label class="checkbox dynamic-view">
                <input type="checkbox" name="data[Listing][{{id}}][dynamic_view]" {{dynamic_view}} />
                <?php echo __('Dyn. Anz.?'); ?>
            </label>&nbsp;&nbsp;

            <label class="checkbox invert-sorting">
                <input type="checkbox" name="data[Listing][{{id}}][invert_sorting]" {{invert_sorting}} />
                <?php echo __('Sort. Aufstreig.?'); ?>
            </label>&nbsp;&nbsp;

            <!--<button class="btn-add btn btn-mini"><?php echo __('Hinzufügen'); ?></button>&nbsp;-->
            <button class="btn-delete btn btn-mini btn-danger"><?php echo __('Löschen'); ?></button>
        </span>
    </div>
</li>
</script>

<script>
$(function () {
    // Notice that we are using the javascript module pattern
    // described by Douglas Crockford.

    UFM.ep.listings = {};
    UFM.ep.listings.$root = $('ul#listings.sortable');
    UFM.ep.listings.$sortable = $('ul#listings');

    /**
     * Returns the id related to an element.
     * Just pass in the elements "this" instance and
     * the dom tree will be traversed to the top until the id is
     *
     * @param element Element to traverse up from, typically "this".
     * @return Integer id of the data set.
     */
    UFM.ep.listings.getId = function (element) {
        return String($(element).parents('li').attr('id')).split('_')[1];
    };

    /**
     * Creates the dom element id.
     * @param id Id of the related data set.
     * @return {String} Element id.
     */
    UFM.ep.listings.createElementId = function (id) {
        return 'listing_' + id;
    };

    UFM.ep.listings.$form = $('#formListing');

    UFM.ep.listings.getFormData = function () {
        return UFM.ep.listings.$form.serialize();
    };

    /**
     * Changes the li class name based on the children count of each element.
     * If a li element has no children, then it can take a video id otherwise not.
     */
    UFM.ep.listings.toggleListingItemClassName = function () {
        'use strict';

        var traverseChildren = function (obj, depth) {
            $(obj).each(function () {
                //if (typeof this.children !== 'undefined') {
                    toggleRootCodeField(this.id, (typeof this.children === 'undefined'));
                    //toggleClass(this.id, 'no-children');
//                }
//                else {
//                    toggleClass(this.id, 'has-children');
//                    traverseChildren(this.children, ++depth);
//                }
            });
        };

        var toggleRootCodeField = function (id, show) {
            var $li = $('#' + UFM.ep.listings.createElementId(id));

            var $codeInput = $li.find('input.code:first');
            var $nameInput = $li.find('input.name:first');

            if (show) {
                $codeInput.show();
                $nameInput.addClass('span4');
                $nameInput.removeClass('span6');
            } else {
                $codeInput.hide();
                $nameInput.addClass('span6');
                $nameInput.removeClass('span4');
            }
        };

        var toggleClass = function (id, className) {
            var $item = $('#' + UFM.ep.listings.createElementId(id));

            $item.removeClass('no-children');
            $item.removeClass('has-children');

            $item.addClass(className);
        };

        var obj = UFM.ep.listings.$sortable.nestedSortable('toHierarchy');
        traverseChildren(obj, 0);
    };

    /**
     * Inits the sortable function.
     */
    UFM.ep.listings.sortable = function () {
        UFM.ep.listings.$sortable.nestedSortable({
            disableNesting: 'no-nest',
            forcePlaceholderSize: true,
            helper: 'clone',
            opacity: .6,
            placeholder: 'placeholder',
            revert: 250,
            tabSize: 25,
            handle: 'div',
            items: 'li',
            listType: 'ul',
            toleranceElement: '> div',
            maxLevels: 3,
            update: function () {
                $.ajax({
                    type: 'POST',
                    url: UFM.ep.here + 'sort.json',
                    data: $('#listings').nestedSortable('serialize'),
                    success: function (data) {
                        // Removes the code field for all items which have children.
                        // TODO: Needed?
                        UFM.ep.listings.toggleListingItemClassName();
                    },
                    error: function (response) {
                        alert(JSON.stringify(response));
                    }
                });
            }
        });
    };

    /**
     * Container for all events.
     * @type {Object}
     */
    UFM.ep.listings.events = {};

    /**
     * Initializes the delete button event.
     */
    UFM.ep.listings.events.remove = function () {
        UFM.ep.listings.$root.find('li .form-inline button.btn-delete').click(function (event) {
            event.preventDefault();

            if (!window.confirm('<?php echo __('Löschen? Alle Kinder des Knotens werden auch gelöscht!'); ?>')) {
                return;
            }
            var id = UFM.ep.listings.getId(this),
                    $el = $('#' + UFM.ep.listings.createElementId(id));

            UFM.ep.listings.remove(id, function () {
                $el.slideUp('slow', function () {
                    $el.remove();
                });
            });
        });
    };

    /**
     * Initializes button add event.
     */
    UFM.ep.listings.events.add = function () {
        UFM.ep.listings.$root.find('li form button.btn-add').click(function (event) {
            event.preventDefault();
            alert(UFM.ep.listings.getId(this) + '-add');
        });
    };

    UFM.ep.listings.events.form = function () {
        UFM.ep.listings.$root.find('form').submit(function (event) {
            event.preventDefault();
            alert(UFM.ep.listings.getId(this) + 'form');
        });
    };

    /**
     * Draws the actual nested list.
     * @return {Object}
     */
    UFM.ep.listings.renderer = function () {
        var template = $('#listItem').html();

        return {
            fetch: function (callback) {
                UFM.ep.listings.$root.empty();
                $.ajax({
                    type: 'POST',
                    url: UFM.ep.here + 'index.json',
                    data: UFM.ep.listings.getFormData(),
                    dataType: 'json',
                    success: function (data) {

                        $(data).each(function () {
                            var $attachToElement,
                                className,
                                html,
                                providerClass = ((this.Provider.name === 'vilea') ? 'label-warning' : 'label-info');

                            if (this.Lecture.parent_id === null) {
                                className = 'parent-item item';

                                UFM.ep.listings.$root.append(Mustache.render(template, {
                                    className: className,
                                    id: this.Lecture.id,
                                    name: this.Lecture.name,
                                    code: this.Lecture.code,
                                    provider_name: this.Provider.name,
                                    provider_class: providerClass,
                                    inactive: (this.Lecture.inactive) ? 'checked' : '',
                                    dynamic_view: (this.Lecture.dynamic_view) ? 'checked' : '',
                                    invert_sorting: (this.Lecture.invert_sorting) ? 'checked' : ''
                                }));
                            }
                            else {
                                $parent = $('#' + UFM.ep.listings.createElementId(this.Lecture.parent_id));

                                if ($parent.find('ul').length > 0) {
                                    className = 'child-item item depth-2';

                                    $parent.find('ul').append(Mustache.render(template, {
                                        className: className,
                                        id: this.Lecture.id,
                                        name: this.Lecture.name,
                                        code: this.Lecture.code,
                                        provider_name: this.Provider.name,
                                        provider_class: providerClass,
                                        inactive: (this.Lecture.inactive) ? 'checked' : '',
                                        dynamic_view: (this.Lecture.dynamic_view) ? 'checked' : '',
                                        invert_sorting: (this.Lecture.invert_sorting) ? 'checked' : ''
                                    }));
                                }
                                else {
                                    className = 'item';

                                    $parent.append('<ul class="sublist child-item depth-1">' + Mustache.render(template, {
                                        className: className,
                                        id: this.Lecture.id,
                                        name: this.Lecture.name,
                                        code: this.Lecture.code,
                                        provider_class: providerClass,
                                        provider_name: this.Provider.name,
                                        inactive: (this.Lecture.inactive) ? 'checked' : '',
                                        dynamic_view: (this.Lecture.dynamic_view) ? 'checked' : '',
                                        invert_sorting: (this.Lecture.invert_sorting) ? 'checked' : ''
                                    }) + '</ul>')
                                }
                            }
                        });
                        UFM.ep.listings.sortable();
                        UFM.ep.listings.toggleListingItemClassName();
                        UFM.ep.listings.events.remove();
                        UFM.ep.listings.events.form();
                    },
                    error: function (response) {
                        alert(JSON.stringify(response));
                    }
                });
                if (typeof callback === 'function') {
                    callback();
                }
            }
        }

    };

    /**
     * Sends form data to the server, which can be passed
     * in via the jquery serialized() method.
     *
     * @param data Serialized data
     * @param callback Callback after a successful request.
     */
    UFM.ep.listings.add = function (data, callback) {
        data += '&position=' + UFM.ep.listings.$sortable.nestedSortable('toArray').length;

        $.ajax({
            type: 'POST',
            url: UFM.ep.here + 'add.json',
            data: data,
            success: function (data) {
                if (typeof callback === 'function') {
                    callback();
                }
            }
        });
    };

    /**
     * Sends a delete post request to the server.
     *
     * @param id Id of the element that shall be deleted.
     * @param callback Function callback after success post.
     */
    UFM.ep.listings.remove = function (id, callback) {
        $.ajax({
            type: 'POST',
            url: UFM.ep.here + 'delete.json',
            data: { id: id },
            success: function (data) {
                if (typeof callback === 'function') {
                    callback();
                }
            }
        });
    };

    UFM.ep.listings.renderer = UFM.ep.listings.renderer();

    /**
     * Inits all events.
     */
    UFM.ep.listings.events.init = function () {
        var $form = $('#formListing');

        $('#ListingTermId,#ListingCategoryId').change(function () {
            if (this.id === 'ListingTermId' && $(this).find('option:selected').val() === '') {
                // TODO: search the correct id
                $('#ListingCategoryId').val(3);
            }
            UFM.ep.listings.renderer.fetch();
        });

        $form.submit(function (event) {
            event.preventDefault();

            UFM.ep.listings.add($(this).serialize(), function () {
                UFM.ep.listings.$form.find('#ListingName,#ListingCode').not(':button, :submit, :reset, :hidden').val('').removeAttr('checked').removeAttr('selected');
                UFM.ep.listings.renderer.fetch();
            });
        });
    };

    UFM.ep.listings.events.init();
    UFM.ep.listings.renderer.fetch();
});
</script>