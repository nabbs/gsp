<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Admins
        </h1>
        <ol class="breadcrumb">
            <li><a href="/panel/index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Admins</li>
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
                                                <?php echo $this->Paginator->sort('title', 'Email'); ?>
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                colspan="1">
                                                <?php echo $this->Paginator->sort('active', 'Status'); ?>
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                colspan="1"
                                                aria-label="Engine version: activate to sort column ascending">
                                                <a href="/panel/panel_add" class="btn btn-primary">
                                                    <i class="fa fa-plus"></i> New admin
                                                </a>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <? foreach ($profiles as $profile) { ?>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1"><? echo $profile['Panel']['email']; ?></td>
                                                <td><? echo ($profile['Panel']['active'] == 1) ? "Enabled" : "Disabled"; ?></td>
                                                <td>
                                                    <a href="/panel/panel_edit/<? echo $profile['Panel']['id']; ?>"
                                                       class="btn btn-primary">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <?php echo $this->Form->postLink('<i class="fa fa-trash"></i>',
                                                        array('action' => 'panel_delete', $profile['Panel']['id']),
                                                        array('confirm' => 'Delete admin "' . $profile['Panel']['email'] . '"?', 'escape' => false, 'class' => 'btn btn-danger')
                                                    ); ?>
                                                </td>
                                            </tr>
                                        <? } ?>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">Email</th>
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

