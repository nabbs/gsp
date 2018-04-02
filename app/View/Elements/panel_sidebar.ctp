<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li <?php echo (!empty($this->params['action']) && ($this->params['action'] == 'index')) ? 'class="active"' : ''; ?>>
                <a href="/panel/index"><i class="fa fa-dashboard"></i> Main</a>
            </li>
            <li <?php echo (!empty($this->params['action']) && ($this->params['action'] == 'properties' || $this->params['action'] == 'add_property' || $this->params['action'] == 'edit_property')) ? 'class="active"' : ''; ?>>
                <a href="/panel/properties"><i class="fa fa-object-group"></i> Properties</a>
            </li>
            <li <?php echo (!empty($this->params['action']) && ($this->params['action'] == 'profiles')) ? 'class="active"' : ''; ?>>
<!--                <a href="/panel/profiles"><i class="fa fa-dashboard"></i> Users</a>-->
            </li>
            <li <?php echo (!empty($this->params['action']) && ($this->params['action'] == 'blog' || $this->params['action'] == 'add_blog' || $this->params['action'] == 'edit_blog')) ? 'class="active"' : ''; ?>>
                <a href="/panel/blog"><i class="fa fa-edit"></i> Blog</a>
            </li>
            <li <?php echo (!empty($this->params['action']) && ($this->params['action'] == 'articles' || $this->params['action'] == 'add_article' || $this->params['action'] == 'edit_article')) ? 'class="active"' : ''; ?>>
                <a href="/panel/articles"><i class="fa fa-file-text-o"></i> Articles</a>
            </li>
            <li <?php echo (!empty($this->params['action']) && ($this->params['action'] == 'panels' || $this->params['action'] == 'panel_add' || $this->params['action'] == 'panel_edit')) ? 'class="active"' : ''; ?>>
                <a href="/panel/panels"><i class="fa fa-file-text-o"></i> Admins</a>
            </li>
            <li <?php echo (!empty($this->params['action']) && $this->params['action'] == 'subscribe') ? 'class="active"' : ''; ?>>
                <a href="/panel/subscribe"><i class="fa fa-envelope"></i> Subscribers</a>
            </li>
            
            <li <?php echo (!empty($this->params['action']) && $this->params['action'] == 'calendar') ? 'class="active"' : ''; ?>>
                <a href="/panel/calendar"><i class="fa fa-calendar"></i> Calendar</a>
            </li>

        </ul>
    </section>
</aside>
