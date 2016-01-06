<header>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="col-md-2">
                    <div class="navbar-header">

                        <a class="navbar-brand" href="index.php">OkonBook</a>
                    </div>
                </div>
                <div class="col-md-8">
                    &nbsp;
                </div>
                <div class="col-md-2">
                    <div class="align-right">
                        <div class="row full_name">
                            <div class="col-md-12">
                                {if isset($smarty.session.token)}
                                    {$user_full_name}
                                {/if}
                            </div>
                        </div>
                        <div class="row option">
                            <div class="col-md-3">
                                {if isset($smarty.session.token)}
                                <a href="logout.php"><i class="fa fa-sign-out"></i></a>
                                {/if}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>