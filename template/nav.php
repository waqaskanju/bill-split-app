<nav class="navbar navbar-inverse">

  <div class="container-fluid">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

        <span class="sr-only">Toggle navigation</span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

      </button>



      <a class="navbar-brand" href="#">Hi <?php echo $actor ?></a>

    </div>



    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">



      <ul class="nav navbar-nav">

        <li class="active"><a href="spend.php">All Details</a></li>

        <li><a href="insform.php">Insert</a></li>

        <li><a href="spend.php?mypage=mydetail">My Details</a></li>

        <li><a href="spend.php?mypage=mycredit">My Credit</a></li>

        <li><a href="category.php">Category</a></li>

        <!-- <li><a href="timetable.php">TimeTable</a></li> -->

        <li><a href="utilitybills.php">Utility Bills</a></li>

        <li><a href="person.class.php">Bill</a></li>



      </ul>



      <ul class="nav navbar-nav navbar-right">

        <li><a href="setting.php"><span class="glyphicon glyphicon-cog"></span> Setting</a></li>

        <li><a href="changepassword.php"><span class="glyphicon glyphicon-user"></span> Change Passowrd</a></li>

        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>

      </ul>

    </div>

  </div>

</nav>