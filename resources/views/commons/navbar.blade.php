<header>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Home</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
                    <li><button type="button" class="btn btn-link">
                    <span class="glyphicon glyphicon-user"></span>
                    <li>{!! link_to_route('signup.get', 'Signup') !!}</li></button>
                    
                    <li><button type="button" class="btn btn-link">
                    <span class="glyphicon glyphicon-ok"></span>
                    {!! link_to_route('tasks.store', 'Log-in') !!}</li></button>
                    
                    <li><a href="#">Login</a></li>
                    
                    <li><button type="button" class="btn btn-link">
                    <span class="glyphicon glyphicon-th-list"></span>
                    {!! link_to_route('tasks.store', 'Tasklists') !!}</li></button>
                    
                    <li><button type="button" class="btn btn-link">
                    <span class="glyphicon glyphicon-edit"></span>
                    {!! link_to_route('tasks.create', 'Add new tasks') !!}</li></button>
                    
                </ul>
            </div>
        </div>
    </nav>
</header>