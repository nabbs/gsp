

<!--div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="section-heading wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Our <span>Blog</span></h1>
                <p class="section-desc wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu magna metus. Donec sed erat non ipsum tincidunt pharetra ipsum tincidunt pharetra
                </p>
            </div>
        </div>
    </div-->
<div class="blog-area pt-70 bg-light blog-page">
    <div class="container">   
        <div class="row">
            <? foreach ($records as $record) { ?>
                <div class="col-md-4 col-sm-6 fix">
                    <div class="single-blog hover-effect-one fix">
                        <div class="blog-image box-hover block">
                            <a href="/blog/<? echo $record['Blog']['url']; ?>" class="block white-hover">
                                <img src="/app/webroot/img/blog/<? echo $record['Blog']['id'] .'/thumb_'. $record['Blog']['photo']; ?>" alt="">
<!--                                <span class="blog-text block bg-lemon pt-4">10 <span class="block pt-2 ">OCT</span></span>-->
                            </a>
                        </div>
                        <div class="single-blog-text">
                            <div class="blog-post-info bg-light-green pl-20 pr-20 pt-17 pb-17">
                                <span><i class="fa fa-user mr-12"></i>Admin</span>
                                <!--span class="pl-35"><i class="fa fa-heart mr-12"></i>15</span-->                               
                                <!--span class="pl-40"><i class="fa fa-comments mr-12"></i>10</span-->
                                 <span class="pull-right"><? echo $record['Blog']['date']; ?></span>
                            </div>
                            <h5 class="pt-22 mb-17"><a
                                        href="/blog/<? echo $record['Blog']['url']; ?>"><? echo $record['Blog']['title']; ?></a>
                            </h5>
                            <p class="mb-20">
                                <? echo $this->Text->truncate($record['Blog']['text'], 200, array('ending' => '', 'exact' => false, 'html' => true)); ?>
                            </p>
                            <a href="/blog/<? echo $record['Blog']['url']; ?>" class="button">Read More</a>
                        </div>
                    </div>
                </div>
            <? } ?>
        <?php if ($this->Paginator->counter(array('format' => '%count%')) > 12) { ?>
            <div class="col-md-12 fix">
                <div class="pagination-content text-center block">
                    <ul class="pagination fix mt-55 mb-0">
                        <? echo $this->Paginator->first(__('<i class="fa fa-backward"></i>'), array('tag' => 'li', 'escape' => false), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a')); ?>
                        <?php echo $this->Paginator->prev(__('<i class="fa fa-caret-left"></i>'), array('tag' => 'li', 'escape' => false), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a')); ?>
                        <?php echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'currentClass' => 'active', 'tag' => 'li', 'first' => 1, 'ellipsis' => '<li><a>&hellip;</a></li>')); ?>
                        <?php echo $this->Paginator->next(__('<i class="fa fa-caret-right"></i>'), array('tag' => 'li', 'currentClass' => 'disabled', 'escape' => false), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a')); ?>
                        <?php echo $this->Paginator->last(__('<i class="fa fa-forward"></i>'), array('tag' => 'li', 'escape' => false), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a')); ?>
                    </ul>
                </div>
            </div>
        <? } ?>
        </div>
    </div>
</div>
