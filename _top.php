<ul class="nav navbar-nav navbar-right" >
    <li>
        <?php if ($_SESSION['user']['role_code'] == 'PATIENT') { ?>
        <a href="LABMS Patient.apk" download="" >
            <i class="fab fa-android" style="font-size: 25px;color: green"></i> Download App</a>
    
        <?php }else{ ?>
            <a href="LABMS Staff.apk" download="" >
            <i class="fab fa-android" style="font-size: 25px;color: green"></i> Download App</a>
    
    <?php    } ?>
        
    </li>
    
    
    <li <?php if($_SESSION['user']['role_code'] != 'ADMIN'){ ?> style="display: none"  <?php } ?> >
        <span class="badge badge-primary"><a href="admin_message.php">
        <?php
        $sqlCNT = "SELECT COUNT(*) AS cnt FROM lb_message WHERE status_code = 'OPEN'";
       $resultPostCNT = getData($sqlCNT);
        if ($resultPostCNT != FALSE) {
            while ($row = mysqli_fetch_assoc($resultPostCNT)) {
                echo $row['cnt'];
            }
        }
        ?>
        </a></span></li>
        
        
    <li><a href="profile.php">
            <span class="btn btn-default btn-xs">[ <?php echo $_SESSION['user']['role_code']; ?> ]</span> 
            <?php echo $_SESSION['user']['frist_name'] ?> 
            <?php echo $_SESSION['user']['last_name'] ?></a></li>
    <li><a href="profile.php">Profile <i class="fas fa-user"></i></a></li>
    <li><a href="logout.php">Logout <i class="fas fa-arrow-circle-right"></i></a>  </li>
</ul>
