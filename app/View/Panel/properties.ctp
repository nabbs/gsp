<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Properties
        </h1>
        <ol class="breadcrumb">
            <li><a href="/panel/index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Properties</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example2" class="table table-bordered table-hover dataTable" role="grid"
                                           aria-describedby="example2_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                colspan="1">
                                                <?php echo $this->Paginator->sort('id', 'ID'); ?>
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                colspan="1">
                                                Image
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                colspan="1">
                                                <?php echo $this->Paginator->sort('listing_status', 'Type'); ?>
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                colspan="1">
                                                <?php echo $this->Paginator->sort('num_bedrooms', 'Num. Bedrooms'); ?>
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                colspan="1">
                                                <?php echo $this->Paginator->sort('num_bathrooms', 'Num. Bathrooms'); ?>
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                colspan="1">
                                                <?php echo $this->Paginator->sort('price', 'Price'); ?>
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                colspan="1">
                                                <?php echo $this->Paginator->sort('county', 'County'); ?>
                                            </th>
                                            <th></th>
                                        </tr>
                                        <tr role="row">
                                            <? $base_url = '/panel/properties';
                                            echo $this->Form->create("Filter", array('url' => $base_url, 'class' => 'filter')); ?>
                                            <td>
                                                <? echo $this->Form->input("id", array('label' => false, 'class' => 'form-control', 'type' => 'text')); ?>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                                <? echo $this->Form->input("listing_status", array('label' => false, 'class' => 'form-control', 'type' => 'select', 'options' => array('rent' => 'rent', 'sale' => 'sale'))); ?>
                                            </td>
                                            <td>
                                                <? echo $this->Form->input("num_bedrooms", array('label' => false, 'class' => 'form-control', 'type' => 'text')); ?>
                                            </td>

                                            <td>
                                                <? echo $this->Form->input("num_bathrooms", array('label' => false, 'class' => 'form-control', 'type' => 'text')); ?>
                                            </td>

                                            <td>
                                                <? echo $this->Form->input("price", array('label' => false, 'class' => 'form-control', 'type' => 'text')); ?>
                                            </td>

                                            <td>
                                                <? echo $this->Form->input("county", array('label' => false, 'class' => 'form-control', 'type' => 'text')); ?>
                                            </td>
                                            <td>
                                                <? echo $this->Form->button('<i class="fa fa-search"></i> Search', array('class' => 'btn btn-primary', 'title' => 'Search', 'escape' => false, 'type' => 'submit')); ?>
                                            </td>
                                            <? echo $this->Form->end(); ?>
                                            <td></td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <? foreach ($properties as $property) { ?>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1"><? echo $property['Property']['id']; ?></td>
                                                <td><img src="<? echo $property['Property']['image_50_38_url']; ?>" class="image-responsive"></td>
                                                <td><? echo $property['Property']['listing_status']; ?></td>
                                                <td><? echo $property['Property']['num_bedrooms']; ?></td>
                                                <td><? echo $property['Property']['num_bathrooms']; ?></td>
                                                <td><? echo $property['Property']['price']; ?></td>
                                                <td><? echo $property['Property']['county']; ?></td>
                                                <td>

                                                    <?php echo $this->Form->postLink('<i class="fa fa-trash"></i>',
                                                        array('action' => 'delete_property', $property['Property']['id']),
                                                        array('confirm' => 'Delete property "' . $property['Property']['id'] . '"?', 'escape' => false, 'class' => 'btn btn-danger')
                                                    ); ?>
                                                </td>
                                            </tr>
                                        <? } ?>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">Title</th>
                                            <th rowspan="1" colspan="1">Status</th>
                                            <th rowspan="1" colspan="1"></th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
                                        <? echo $this->Paginator->counter('Showing {:start} to {:end} of {:count} entries'); ?>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <?php if ($this->Paginator->counter(array('format' => '%count%')) > $limit) { ?>
                                        <div class=" text-center">
                                            <div class="pagination pagination-large">
                                                <ul class="pagination">
                                                    <?php
                                                    echo $this->Paginator->first(__('First'), array('tag' => 'li', 'escape' => false), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a'));
                                                    echo $this->Paginator->prev(__('Previous'), array('tag' => 'li', 'escape' => false), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a'));
                                                    echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'currentClass' => 'active', 'tag' => 'li', 'first' => 1));
                                                    echo $this->Paginator->next(__('Next'), array('tag' => 'li', 'currentClass' => 'disabled', 'escape' => false), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a'));
                                                    echo $this->Paginator->last(__('Last'), array('tag' => 'li', 'escape' => false), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a')); ?>

                                                </ul>
                                            </div>
                                        </div>
                                    <? } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>