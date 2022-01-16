<style>
    .info-box .fa-question-circle:hover + .info {
      display: block!important;
     
    }

    div#profile7_btn {
        padding: 0;
    }
    div#profile7_btn .modal .modal-content {
        /* padding: 30px 30px 38px 30px; */
        padding: 0!important;
    }
    body#post-35458 #profile7_btn .col {
        padding: 0 6px;
    }
    body#post-35458 #profile7_btn .modal-content {
        padding: 0;
    }
    body#post-35458 #profile7_btn .modal-content h2 {
         font-size: 34px;
        font-weight: 500;
        color: #0064AD;
        margin: 0;
    }
    body#post-35458 #profile7_btn .modal-content b {
        font-weight: 400;
        font-size: 16px;
        color: #969696;
        display: block;
        margin: 0 0 39px;
    }

    body#post-35458 #profile7_btn form p:last-child {
        margin-bottom: 0;
        margin-top: 0;
    }
    body#post-35458 #profile7_btn form {
        margin: 0px !important;
    }
    body#post-35458 #profile7_btn .controlWrapper {
        float: right;
    }
    body#post-35458 #profile7_btn {
        padding: 30px;
    }
    body#post-35458 .pl-30 {
        padding-left: 30px !important;
    }
    

.profile5_disables .col.s3.jobTitle {
    margin-right: 10px;
    margin-left: 10px;    
}
    </style>

    <phpcode>
        <?php

        session_start();
        $myusername = $_SESSION['myusername'];

    if (isset($_POST['empnumtedoen']))
    {
      $empnumtedoen = $_POST['empnumtedoen'];
      $numempxyz = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($_SESSION['tedoen']), base64_decode($empnumtedoen), MCRYPT_MODE_CBC, md5(md5($_SESSION['tedoen']))), "\0");
      $empnum = $signedinnum = $_SESSION['thisEE'] = $numempxyz;
    }
    else if (isset($_POST['empnum']))
        $empnum = $_POST['empnum'];
        else
        $empnum = $_SESSION['numemp'];

        $adminoffice = $_SESSION['adminoffice'];
        $adminofficename = $_SESSION['adminofficename'];

        $host="b66c0ee722b53502a9a3944b03cd04984798c5f5.rackspaceclouddb.com"; // Host name
        $username="sandboxit"; // Mysql username
        $password="kK8ZG9mMhXbA2P4W"; // Mysql password
        $db_name="sandboxit"; // Database name

        $wpdb = new wpdb( $username, $password, $db_name, $host );
        $timetracks = $wpdb->get_results("SELECT login.mem as mymem from login  where username = '$myusername'");

        foreach($timetracks as $timetrack)
        {
          $mymem = $timetrack->mymem;
      }

      $wpdb = new wpdb( $username, $password, $db_name, $host );
      $timetracks = $wpdb->get_results("select * from login where num= $empnum");

      foreach($timetracks as $timetrack)
      {
        $fname = $timetrack->first;
        $lname = $timetrack->last;
        $email = $timetrack->username;
        $memlevel = $timetrack->MEM;
       
        $street = $timetrack->street;
        $apt = $timetrack->apt;
        $city = $timetrack->city;
        $state = $timetrack->state;
        $zip = $timetrack->zip;
        $phone = $timetrack->phone;
        $cphone = $timetrack->cphone;

        $dob = $timetrack->dob;
        $email2 = $timetrack->email2;
        $county = $timetrack->county;

        $ecn = $timetrack->ecn;
        $ecp = $timetrack->ecp;

        $hiredate = $timetrack->hiredate;
        $reviewdate = $timetrack->reviewdate;
        $firedate = $timetrack->firedate;
        $sepreason = $timetrack->sepreason;
        $raisedate = $timetrack->raisedate;

        $eenum = $timetrack->eenum;
        $emp_cust1 = $timetrack->emp_cust1;
        $user_cust1 = $timetrack->user_cust1;
        if ($emp_cust1 < 1) $emp_cust1 = '';
        if ($user_cust1 == "-1") $user_cust1 = '';

        $eestatus = $timetrack->eestatus;
        $eestatusother = $timetrack->eestatusother;
        $exemptstatus = $timetrack->exemptstatus;

        $location = $timetrack->location;

        $jobtitle = $timetrack->jobtitle;
        $supervisorname = $timetrack->supervisorname;
        $department = $timetrack->department;

        $top = $timetrack->top;
        $topother = $timetrack->topother;
        $rop= $timetrack->rop;
        $diffrate = $timetrack->diffrate;

        $eeho = $timetrack->eeho;

    $eehi = $timetrack->eehi;
    $eedi = $timetrack->eedi;
    $eevi = $timetrack->eevi;
    $eeki = $timetrack->eeki;
    $eefi = $timetrack->eefi;
    $eeai = $timetrack->eeai;
    $eeo1 = $timetrack->eeo1;
    $eeo2 = $timetrack->eeo2;
    $eeo3 = $timetrack->eeo3;
    $eeo4 = $timetrack->eeo4;

    if ($eehi == NULL ) $eehi = -1;
    if ($eedi == NULL ) $eedi = -1;
    if ($eevi == NULL ) $eevi = -1;
    if ($eeki == NULL ) $eeki = -1;
    if ($eefi == NULL ) $eefi = -1;
    if ($eeai == NULL ) $eeai = -1;
    if ($eeo1 == NULL ) $eeo1 = -1;
    if ($eeo2 == NULL ) $eeo2 = -1;
    if ($eeo3 == NULL ) $eeo3 = -1;
    if ($eeo4 == NULL ) $eeo4 = -1;


    $brb1 = $timetrack->brb1;
    $brb2 = $timetrack->brb2;
    $brb3 = $timetrack->brb3;
    $brb4 = $timetrack->brb4;
    $brb5 = $timetrack->brb5;
    $brb6 = $timetrack->brb6;
    $brb7 = $timetrack->brb7;
    $brb8 = $timetrack->brb8;
    $brb9 = $timetrack->brb9;
    $brb10 = $timetrack->brb10;

    if ($brb1 == NULL ) $brb1 = -1;
    if ($brb2 == NULL ) $brb2 = -1;
    if ($brb3 == NULL ) $brb3 = -1;
    if ($brb4 == NULL ) $brb4 = -1;
    if ($brb5 == NULL ) $brb5 = -1;
    if ($brb6 == NULL ) $brb6 = -1;
    if ($brb7 == NULL ) $brb7 = -1;
    if ($brb8 == NULL ) $brb8 = -1;
    if ($brb9 == NULL ) $brb9 = -1;
    if ($brb10 == NULL ) $brb10 = -1;

    $other0label = $timetrack->lbo0;
    $other1label = $timetrack->lbo1;
    $other2label = $timetrack->lbo2;
    $other3label = $timetrack->lbo3;

    }

    if ($memlevel == 5) $memlevelcheck = 3.5; else $memlevelcheck = $memlevel;
    if ($_SESSION['mylevel'] == 5) $mylevelcheck = 3.5; else $mylevelcheck = $_SESSION['mylevel'];

    // echo '*'.$memlevel.'-'.$mylevelcheck;

    if (($mylevelcheck > 1) && (($mylevelcheck > $memlevelcheck) or ($mylevelcheck == 4))) { 

    ?>
    </phpcode>

    <div class="EEEdit twoColEEedit">
        <div class="col s12 rightColumn oneColumn masterFiles masterFileEEList editInfo twoColumnEEEdit remasteredEE">
            <div class="island active">
                <div class="titleWrapper activeTab">
                    <i class="fa fa-user" aria-hidden="true"></i> View/Edit <? if ($myusername == $email) echo 'Profile'; else echo 'Info' ?>
                </div>
                <!-- button section -->
                <div class="button-section">
                    <a class="waves-effect waves-light btn modal-trigger orangeButton uploadButton" href="#" id="profile1_btn"> 
                        <span>1</span> 
                    </a>
                    <a class="waves-effect waves-light btn modal-trigger orangeButton uploadButton" href="#" id="profile2_btn"> 
                        <span>2</span> 
                    </a>                
                    <a class="waves-effect waves-light btn modal-trigger orangeButton uploadButton" href="#" id="profile3_btn"> 
                        <span>3</span> 
                    </a>
                    <a class="waves-effect waves-light btn modal-trigger orangeButton uploadButton" href="#" id="profile4_btn"> 
                        <span>4</span> 
                    </a>
                    <a class="waves-effect waves-light btn modal-trigger orangeButton uploadButton" href="#" id="profile5_btn"> 
                        <span>5</span> 
                    </a>
                    <a class="waves-effect waves-light btn modal-trigger orangeButton uploadButton" href="#" id="profile6_btn"> 
                        <span>6</span> 
                    </a>
                    <a class="waves-effect waves-light btn orangeButton uploadButton modal-trigger" href="#profile7_btn">
                        <span>7</span> 
                    </a>
                    <a class="waves-effect waves-light btn modal-trigger orangeButton uploadButton" href="#" id="profile8_btn"> 
                        <span>8</span> 
                    </a>
                </div>    
                <!-- /button section -->
                <div class="islandContent">
                    <div class="row">
                        <div class="col avatarEdit s2">
                            <img class="circle avatar" height="131px" width="131px" src="/membership/sandbox4/showfile.php?num=<? echo $empnum; ?>" onerror="this.src='<?php echo get_bloginfo('template_directory'); ?>/images/default.png'" />
                            <form enctype="multipart/form-data" action="/membership/sandbox4/uploadprofileonly.php" method="post">
                                <div style="display:none;">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="99999999" />
                                    <input type="hidden" name="num" id="num" value="<? echo $empnum;?>" />
                                    <input type="checkbox" class="attachIDs" name="toDeleteIDs" />
                                </div>
                                <span class="for_mobile"><h2 class="EEname"><? echo "$lname, $fname"; ?></h2></span>
                                <input style="display:block;" type="button" value="Change Profile Pic" class="orangeButton" onclick="document.getElementById('fileID').click(); formname.submit(); return false;" />
                                <div style="display:none;">
                                    <input name="userfile" onchange="this.form.submit();" type="file" id="fileID" style="visibility: hidden;" />
                                </div>
                            </form>
                        </div>
                        <div class="col infoEdit s10">
                            <span class="for_desktop"><h2 class="EEname"><? echo "$lname, $fname"; ?></h2></span>
                            <!-- <p class="p1 cedr-darkgray-font lastLogin">Last Logged in: {Date}</p> -->
                            <form name="mod-employee" method="post" action="/membership/sandbox4/mod_employee_mem_plus.php">
                                <div style="display:none;">
                                    <input type="hidden" name="empnum" id="empnum" value="<? echo $empnum;?>" />
                                </div>

            <!--  hidden_fields section  -->
                <div class="hidden_fields">                                
                                <div class="personalSectionWrapper">
                                    <div class="infoSection">
                                        <h4><i class="fa fa-user"></i>Personal</h4>
                                    </div>
                                    <div class="col s6 noLeftPad">
                                        <label for="fName">First Name*</label>
                                        <input type="text" name="fname" id="fname" value="<? echo $fname; ?>" required>
                                    </div>
                                    <div class="col s6 noRightPad">
                                        <label for="lName">Last Name*</label>
                                        <input type="text" name="lname" id="lname" value="<? echo $lname; ?>" required>
                                    </div>
                                    <div class="col s6 noLeftPad">
                                        <label <? if ($memlevel == 4) echo 'class="graayed"'; ?> for="workEmail">Email (Work)*</label>
                                        <input <? if ($memlevel == 4) echo 'readonly'; ?> type="email" name="email" id="workEmail" value="<? echo $email; ?>" required>
                                    </div>
                                    <div class="col s6 noRightPad">
                                        <label for="personalEmail">Email (Personal)</label>
                                        <input type="email" name="email2" id="personalEmail" value="<? echo $email2; ?>">
                                    </div>
                                    <div class="col s5 noLeftPad add_emp_hide_field">
                                        <label for="hPhone">Home Phone</label>
                                        <input type="text" name="hphone" id="hPhone" value="<? echo $phone; ?>">
                                    </div>
                                    <div class="col s5">
                                        <label for="cPhone">Cell Phone</label>
                                        <input type="text" name="cphone" id="cPhone" value="<? echo $cphone; ?>">
                                    </div>
                                    <div class="col s2 dateAnchor noRightPad">
                                        <label for="dateofbirth">Date of Birth</label>
                                        <input class="" type="text" name="dob" id="dateofbirth" value="<? echo $dob; ?>">
                                    </div>
                                    <div class="col s10 noLeftPad">
                                        <label for="street">Street Address</label>
                                        <input type="text" name="street" id="street" value="<? echo $street; ?>">
                                    </div>
                                    <div class="col s2 noRightPad">
                                        <label for="apt">Apt/Ste</label>
                                        <input type="text" name="apt" id="apt" value="<? echo $apt; ?>">
                                    </div>
                                    <div class="col s6 noLeftPad">
                                        <label for="city">City</label>
                                        <input type="text" name="city" id="city" value="<? echo $city; ?>">
                                    </div>
                                    <div class="col s2 stateSelect">
                                        <label for="state">State</label>
                                        <select name="state" class="browser-default">
                                            <option value="" disabled selected>Choose One</option>
                                            <option <? if ($state=="AL" ) echo 'selected'; ?> value="AL">Alabama</option>
                                            <option <? if ($state=="AK" ) echo 'selected'; ?> value="AK">Alaska</option>
                                            <option <? if ($state=="AZ" ) echo 'selected'; ?> value="AZ">Arizona</option>
                                            <option <? if ($state=="AR" ) echo 'selected'; ?> value="AR">Arkansas</option>
                                            <option <? if ($state=="CA" ) echo 'selected'; ?> value="CA">California</option>
                                            <option <? if ($state=="CO" ) echo 'selected'; ?> value="CO">Colorado</option>
                                            <option <? if ($state=="CT" ) echo 'selected'; ?> value="CT">Connecticut</option>
                                            <option <? if ($state=="DE" ) echo 'selected'; ?> value="DE">Delaware</option>
                                            <option <? if ($state=="DC" ) echo 'selected'; ?> value="DC">District of Columbia</option>
                                            <option <? if ($state=="Fl" ) echo 'selected'; ?> value="FL">Florida</option>
                                            <option <? if ($state=="GA" ) echo 'selected'; ?> value="GA">Georgia</option>
                                            <option <? if ($state=="HI" ) echo 'selected'; ?> value="HI">Hawaii</option>
                                            <option <? if ($state=="ID" ) echo 'selected'; ?> value="ID">Idaho</option>
                                            <option <? if ($state=="IL" ) echo 'selected'; ?> value="IL">Illinois</option>
                                            <option <? if ($state=="IN" ) echo 'selected'; ?> value="IN">Indiana</option>
                                            <option <? if ($state=="IA" ) echo 'selected'; ?> value="IA">Iowa</option>
                                            <option <? if ($state=="KS" ) echo 'selected'; ?> value="KS">Kansas</option>
                                            <option <? if ($state=="KY" ) echo 'selected'; ?> value="KY">Kentucky</option>
                                            <option <? if ($state=="LA" ) echo 'selected'; ?> value="LA">Louisiana</option>
                                            <option <? if ($state=="ME" ) echo 'selected'; ?> value="ME">Maine</option>
                                            <option <? if ($state=="MD" ) echo 'selected'; ?> value="MD">Maryland</option>
                                            <option <? if ($state=="MA" ) echo 'selected'; ?> value="MA">Massachusetts</option>
                                            <option <? if ($state=="MI" ) echo 'selected'; ?> value="MI">Michigan</option>
                                            <option <? if ($state=="MN" ) echo 'selected'; ?> value="MN">Minnesota</option>
                                            <option <? if ($state=="MS" ) echo 'selected'; ?> value="MS">Mississippi</option>
                                            <option <? if ($state=="MO" ) echo 'selected'; ?> value="MO">Missouri</option>
                                            <option <? if ($state=="MT" ) echo 'selected'; ?> value="MT">Montana</option>
                                            <option <? if ($state=="NE" ) echo 'selected'; ?> value="NE">Nebraska</option>
                                            <option <? if ($state=="NV" ) echo 'selected'; ?> value="NV">Nevada</option>
                                            <option <? if ($state=="NH" ) echo 'selected'; ?> value="NH">New Hampshire</option>
                                            <option <? if ($state=="NJ" ) echo 'selected'; ?> value="NJ">New Jersey</option>
                                            <option <? if ($state=="NM" ) echo 'selected'; ?> value="NM">New Mexico</option>
                                            <option <? if ($state=="NY" ) echo 'selected'; ?> value="NY">New York</option>
                                            <option <? if ($state=="NC" ) echo 'selected'; ?> value="NC">North Carolina</option>
                                            <option <? if ($state=="ND" ) echo 'selected'; ?> value="ND">North Dakota</option>
                                            <option <? if ($state=="OH" ) echo 'selected'; ?> value="OH">Ohio</option>
                                            <option <? if ($state=="OK" ) echo 'selected'; ?> value="OK">Oklahoma</option>
                                            <option <? if ($state=="OR" ) echo 'selected'; ?> value="OR">Oregon</option>
                                            <option <? if ($state=="PA" ) echo 'selected'; ?> value="PA">Pennsylvania</option>
                                            <option <? if ($state=="RI" ) echo 'selected'; ?> value="RI">Rhode Island</option>
                                            <option <? if ($state=="SC" ) echo 'selected'; ?> value="SC">South Carolina</option>
                                            <option <? if ($state=="SD" ) echo 'selected'; ?> value="SD">South Dakota</option>
                                            <option <? if ($state=="TN" ) echo 'selected'; ?> value="TN">Tennessee</option>
                                            <option <? if ($state=="TX" ) echo 'selected'; ?> value="TX">Texas</option>
                                            <option <? if ($state=="UT" ) echo 'selected'; ?> value="UT">Utah</option>
                                            <option <? if ($state=="VT" ) echo 'selected'; ?> value="VT">Vermont</option>
                                            <option <? if ($state=="VA" ) echo 'selected'; ?> value="VA">Virginia</option>
                                            <option <? if ($state=="WA" ) echo 'selected'; ?> value="WA">Washington</option>
                                            <option <? if ($state=="WV" ) echo 'selected'; ?> value="WV">West Virginia</option>
                                            <option <? if ($state=="WI" ) echo 'selected'; ?> value="WI">Wisconsin</option>
                                            <option <? if ($state=="WY" ) echo 'selected'; ?> value="WY">Wyoming</option>
                                        </select>
                                    </div>
                                    <div class="col s2">
                                        <label for="zip">Zip Code</label>
                                        <input type="text" name="zip" id="zip" value="<? echo $zip; ?>">
                                    </div>
                                    <div class="col s2 noRightPad">
                                        <label for="zip">County</label>
                                        <input type="text" name="county" id="county" value="<? echo $county; ?>" >
                                    </div>
                                     <div class="col s6 noLeftPad">
                                        <label for="zip">Emergency Contact Name</label>
                                        <input type="text" name="ecn" id="ecn" value="<? echo $ecn; ?>">
                                    </div>
                                    <div class="col s6 noRightPad">
                                        <label for="zip">Emergency Contact Phone</label>
                                        <input type="text" name="ecp" id="ecp" value="<? echo $ecp; ?>">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                               <!--  <hr class="workSectionHR"> -->

    </div>
    <!--  hidden_fields section  -->
                <div class="hidden_fields">
                                     
                                <!-- Work Section -->
                                <div class="workSectionWrapper">
                                    <div class="infoSection workInfosection">
                                        <!-- <h4><i class="fa fa-building"></i>Workpp
                                             <div class="info-box profile5-part profile5-icon2">
                                               <i class="fa fa-question-circle"></i>
                                                 <div class="info">
                                                    <b>HINT:</b>
                                                    <span>You do not have permission to edit this information. Please contact your admin.</span>
                                                 </div>
                                             </div>
                                        </h4> -->
                                        <h4 id="work-heading"><i class="fa fa-building"></i>Work 
                                        <div class="info-box profile5-part profile5-icon2 ">
                                            <i class="fa fa-question-circle"></i>
                                             <div class="info">
                                                <b>HINT:</b>
                                                <span>You do not have permission to edit this information. Please contact your admin.</span>
                                             </div>
                                        </div>
                                        </h4>
                                        <h4 id="per-heading"><i class="fa fa-lock"></i>Permissions</h4>
                                    </div>
                                    <div class="col s2 noLeftPad dateAnchor add_emp_hide_field">
                                        <label for="hiredate">Hire Date</label>
                                        <input class="" type="text" name="hiredate" id="hiredate" value="<? echo $hiredate; ?>" >
                                    </div>
                                    <div class="col s2 dateAnchor smaller2 add_emp_hide_field">
                                        <label for="reviewdate">Next Review Date</label>
                                        <input class="" type="text" name="reviewdate" id="reviewdate" value="<? echo $reviewdate; ?>" >
                                    </div>

                                    <div class="col s2 smaller2 add_emp_hide_field">
                                        <label for="eeStatus">Exempt Status</label>
                                        <select class="browser-default" name="exemptstatus" id="exemptStatus">
                                            <option value="" disabled selected>Choose One</option>
                                            <option <? if ($exemptstatus == "exempt") echo "selected"; ?> value="exempt">Exempt</option>
                                            <option <? if ($exemptstatus == "nonexempt") echo "selected"; ?> value="nonexempt">Non-exempt</option>
                                        </select>
                                    </div>
                                    <div class="col s2 smaller2 add_emp_hide_field">
                                        <label for="eeStatus">Employment Status</label>
                                        <select class="browser-default" name="eestatus" id="eeStatus">
                                            <option value="" disabled selected>Choose One</option>
                                            <option <? if ($eestatus == "fulltime") echo "selected"; ?> value="fulltime">Full-time</option>
                                            <option <? if ($eestatus == "parttime") echo "selected"; ?> value="parttime">Part-time</option>
                                            <option <? if ($eestatus == "temp") echo "selected"; ?> value="temp">Temporary</option>
                                            <option <? if ($eestatus == "seasonal") echo "selected"; ?> value="seasonal">Seasonal</option>
                                            <option <? if ($eestatus == "flex") echo "selected"; ?> value="flex">Flex-time</option>
                                            <option <? if ($eestatus == "midtime") echo "selected"; ?> value="midtime">Mid-time</option>
                                            <option <? if ($eestatus == "indcont") echo "selected"; ?> value="indcont">Ind. Cont.</option>
                                            <option <? if ($eestatus == "other") echo "selected"; ?> value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col s3 hiddenOther eeStatusOther <? if ($eestatus == 'other') echo 'show'; ?>">
                                        <label for="eeStatusOther" class="for_desktop">&nbsp;</label>
                                        <input id="eeStatusOther" name="eestatusother" type="text" placeholder="Please Specify" value="<? echo $eestatusother; ?>">
                                    </div>


                                     <div class="col s2 noRightPad smaller2 only_permission_level">
                                        <label for="memlevel">Level*</label>
                                        <select required name="memlevel" class="browser-default" id="designation_level">

                                            <!-- <? //if ($memlevel == 4) echo '<option selected  value="4">Owner</option>'; ?> -->
                                            <? if ($memlevel == 1)  echo '<option selected value="1">Employee</option>'; else echo '<option value="1" selected="selected">Employee</option>'; ?>
                                            <? if ($memlevel == 3) echo '<option selected value="3">Manager</option>'; else echo '<option value="3">Manager</option>'; ?>
                                            <? if ($mylevelcheck > 3) if ($memlevel == 5) echo '<option selected value="5">Admin</option>'; else echo '<option value="5">Admin</option>'; ?>
                                            
                                        </select>

                                        <!-- fourOption_proxy_error_Modal_info -->
                                        <div id="admin-modals" class="fourOption_proxy_error_Modal_info">
                                             <div class="four_proxy-info">
                                                <b>Is this your proxy? <i class="fa fa-question-circle"></i>
                                                    <div class="info">
                                                        <b>HINT:</b>
                                                        <span>You may assign one Admin to act as your proxy. This person will have all of the same permissions as you.<br><br>This person will not be able to see your information.</span>
                                                    </div>
                                                </b>
                                                <span>
                                                    <input id="fourOption_proxy1" name="eehi" type="radio" class="proxy_checkbox default_custom_proxy_checkbox1" value="1">
                                                    <label for="fourOption_proxy1">Yes</label>

                                                </span>
                                                <span>
                                                    <input id="fourOption_proxy2" name="eehi" type="radio" class="proxy_checkbox default_custom_proxy_checkbox2" value="1">
                                                    <label for="fourOption_proxy2">No</label>
                                                </span>
                                            </div> 
                                        </div> 
                                        <!-- /fourOption_proxy_error_Modal_info -->
                                    </div>

                                    <div class="col s4 noLeftPad for_desktop">
                                        <label class="grayed" for="office">Office</label>
                                        <input disabled type="text" id="office" value="<? echo $adminofficename; ?>">
                                    </div>
                                    <div class="col s4 locationCol">
                                        <label for="Location">Location</label>
                                        <input type="text" name="location" id="Location" value="<? echo $location; ?>">
                                    </div>
                                    <div class="Separat_date">
                                         <div class="col s2 smaller2 dateAnchor sepDate">
                                        <label for="fireDate">Separation Date</label>
                                        <input class="" type="text" name="firedate" id="fireDate" value="<? echo $firedate; ?>">
                                    </div>
                                    <div class="col s2 smaller2 noRightPad">
                                        <label for="sepReason">Separation Reason</label>
                                        <select name="sepreason" id="sepReason" class="browser-default">
                                            <option value="" disabled selected>Choose One</option>
                                            <option <? if ($sepreason == "voluntary") echo "selected"; ?> value="voluntary">Voluntary</option>
                                            <option <? if ($sepreason == "nonvoluntary") echo "selected"; ?> value="nonvoluntary">Involuntary</option>
                                        </select>
                                    </div>
                                    </div>
                                   
                                    <div class="col s3 noLeftPad jobTitle">
                                        <label for="jobTitle">Job Title</label>
                                        <input type="text" id="jobTitle"  name="jobtitle" value="<? echo $jobtitle; ?>">
                                    </div>
                                    <div class="col s3 departmentp5">
                                        <label for="supervisor">Department</label>
                                        <input type="text" name="department" id="department" value="<? echo $department; ?>">
                                    </div>
                                    <div class="col s3">
                                        <label for="supervisor">Direct Supervisor</label>
                                        <input type="text" id="supervisor" name="supervisorname" value="<? echo $supervisorname; ?>" >
                                    </div>
                                    <div class="col s3 noRightPad twoColeeID">
                                        <label for="eeNum">Employee ID Number</label>
                                        <input type="text"  id="eeNum" name="eenum" value="<? echo $eenum; ?>">
                                    </div>
                                    <? if ($_SESSION['comingfrom'] == '88') { ?>
                                    <div class="col s2 noLeftPad">
                                        <label for="eeNum">SC Record Number</label>
                                        <input type="hidden" id="empcust1_bf" name="empcust1_bf" value="<? echo $emp_cust1; ?>">
                                        <input type="text"  id="empcust1" name="empcust1" value="<? echo $emp_cust1; ?>">
                                    </div>

                                    <div class="col s3">
                                        <label for="eeNum">SC Login</label>
                                        <input type="text" id="usercust1" name="usercust1" value="<? echo $user_cust1; ?>">
                                    </div>
                                        <? } ?>
                                    <div class="clearfix"></div>
                                </div>

                             <!--<hr class="workSectionHR"> -->
                               <div class="payRate twoColumnPayRate clearfix" style="border-bottom: 0px solid #e0e0df;margin-top: 34px;padding-bottom: 0;">
                                    <div class="col s12 currentPayWrapper">
                                        <div class="current">
                                            <h4><i class="fa fa-dollar"></i>New Pay Rate</h4>


                                        <div class="raiseWrapper clearfix">
                                                    <div class="raises clearfix">
                                                        <div class="col s2 dateAnchor noLeftPad">
                                                            <label for="raiseDate">Date</label>
                                                            <input class="" type="text" name="raisedate" id="raiseDate">
                                                        </div>
                                                        <div class="col s2 typeofpay">
                                                            <label for="ToP">Type of Pay</label>
                                                            <select name="top" id="ToP" class="browser-default">
                                                                <option value="" selected disabled>Choose One</option>
                                                                <option value="hourly">Hourly</option>
                                                                <option value="salary">Salary</option>
                                                                <option id="basePayCom" value="basepluscommiss">Base Pay Plus Commission</option>
                                                                <option value="commission">Commission</option>
                                                                <option value="dailyrate">Daily Rate</option>
                                                                <option value="perdiem">Per Diem</option>
                                                                <option value="other">Other</option>
                                                            </select>
                                                        </div>
                                                        <div class="col s2 hiddenToP">
                                                            <label for="hToP" class="for_desktop">&nbsp;</label>
                                                            <input type="text" name="topother" id="hToP" placeholder="Please Specify">
                                                        </div>
                                                        <div class="col s2">
                                                            <label for="RoP">Rate of Pay</label>
                                                            <input type="text" name="rop" id="RoP">
                                                        </div>
                                                        <div class="col s2 raiseAmountWrapper">
                                                            <label for="raiseAmount" class="cedr-darkgray-font">Raise Amount</label>
                                                            <input type="text" id="raiseAmount" disabled>
                                                        </div>
                                                        <div class="col s2 differential noRightPad">
                                                            <label for="diffRate">Alternate Rate</label>
                                                            <input type="text" >
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <!-- <hr class="workSectionHR"> -->
                                    <div class="col s12 payArchiveWrapper">
                                        <div class="infoSection">
                                            <h4 class="pay_archive" style="margin-top: 25px;"><i class="fa fa-dollar"></i>Pay Archive
                                                <div class="info-box profile5-part profile5-icon2">
                                                    <i class="fa fa-question-circle"></i>
                                                     <div class="info">
                                                        <b>HINT:</b>
                                                        <span>You do not have permission to edit this information. Please contact your admin.</span>
                                                     </div>
                                                </div>
                                             </h4>
                                            <div class="historyWrapper default_historyWrapper">

                                                <?
                                                $timetracks = $wpdb->get_results("select * from payhis where num = $empnum order by STR_TO_DATE(raisedate , '%m/%d/%Y') asc, seq asc;");

                                                $raisedate = $top = $topother = $rop = $raiseamount = $toplast = $diffrate = array();
                                                $i = 0;

                                                  foreach($timetracks as $timetrack)
                                                  { 
                                                    $i++;
                                                    $raisedate[$i] = $timetrack->raisedate;
                                                    $top[$i] = $timetrack->top;
                                                    $topother[$i] = $timetrack->topother;
                                                    $rop[$i]= $timetrack->rop;
                                                    $raiseamount[$i] = $rop[$i] - $rop[$i-1];
                                                    $diffrate[$i] = $timetrack->diffrate;
                                                    $seq[$i] = $timetrack->seq;
                                                  }

                                                if ($i == 0) { ?>


                                                <em class="cedr-lightgray-font center">Nothing to see here</em>

                                                <? } else {

                                                $j = $i;

                                                for ($i = $j; $i > 0; $i--) { ?>





                                                <div class="dataWrapper raiseWrapper" id="${history[index].name}">
                                                    <div class="raises clearfix">
                                                        <div class="col s2 dateAnchor noLeftPad disabledInput">
                                                            <label class="cedr-darkgray-font" for="raiseDate">Date</label>
                                                            <input class="" value="<? echo $raisedate[$i]; ?>" type="text" name="raiseDate" id="raiseDate" disabled>
                                                        </div>
                                                        <div class="col s2 typeofpay disabledInput">
                                                            <label class="cedr-darkgray-font" for="ToP">Type of Pay</label>

                                                        <select name="top" id="ToP" class="browser-default" disabled>
                                                            <option value="" selected disabled>Choose One</option>
                                                            <option <? if ($top[$i] == "hourly") echo 'selected'; ?> value="hourly">Hourly</option>
                                                            <option <? if ($top[$i] == "salary") echo 'Selected'; ?> value="salary">Salary</option>
                                                            <option <? if ($top[$i] == "basepluscommiss") echo 'selected'; ?> value="basepluscommission">Base Pay Plus Commission</option>
                                                            <option <? if ($top[$i] == "commission") echo 'selected'; ?> value="commission">Commission</option>
                                                            <option <? if ($top[$i] == "dailyrate") echo 'selected'; ?> value="dailyrate">Daily Rate</option>
                                                            <option <? if ($top[$i] == "perdiem") echo 'selected'; ?> value="perdiem">Per Diem</option>
                                                            <option <? if ($top[$i] == "other") echo 'selected'; ?> value="other"><? echo $topother[$i]; ?></option>
                                                        </select>
                                                        </div>
                                                        <div class="col s2 disabledInput">
                                                            <label class="cedr-darkgray-font" for="RoP">Rate of Pay</label>
                                                            <input type="text" value="<? echo $rop[$i]; ?>" id="RoP" disabled>
                                                        </div>
                                                        <div class="col s2 raiseAmountWrapper disabledInput">
                                                            <label class="cedr-darkgray-font" for="raiseAmount" class="cedr-darkgray-font">Raise Amount</label>
                                                            <input type="text" id="raiseAmount" value="<? echo number_format($raiseamount[$i],2); ?>" disabled>
                                                        </div>
                                                        <div class="col s3 differential disabledInput">
                                                            <label class="cedr-darkgray-font" for="diffRate">Alternate Rate</label>
                                                            <input type="text" value="<? echo $diffrate[$i]; ?>" id="diffRate" disabled>                                            
                                                        </div>
                                                        <div class="historyActions">
                                                          <button name="trashbutton" value="<? echo $seq[$i]; ?>" style="border:none;" class="action cedr-orange"><i class="fa fa-trash"></i></button>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                                <? } } ?>
                                            </div>
                                            <div class="historyWrapper profile2-part">
                                                    <em>You do not have permission to edit Pay for this user.</em>
                                            </div>   

                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="benes clearfix">
                                    <h4><i class="fa fa-briefcase"></i>Benefits <span class="beneButton" id="modalInsuranceTrigger"><i class="fa fa-pencil-square-o"></i></span>
                                        <div class="info-box profile5-part profile5-icon">
                                                <i class="fa fa-question-circle"></i>
                                                 <div class="info">
                                                    <b>HINT:</b>
                                                    <span>You do not have permission to edit this information. Please contact your admin.</span>
                                                 </div>
                                             </div>
                                     </h4>

                                    <? if (($brb1 < 1) && ($brb2 < 1) && ($brb3 < 1) && ($brb4 < 1) && ($brb5 < 1) && ($brb6 < 1) && ($brb7 < 1) && ($brb8 < 1) && ($brb9 < 1) && ($brb10 < 1)) $hide = 1; else $hide =0; ?>
                                        
                                        <div class='schebang <? if ($hide == 0) echo "hide"; ?>'>Nothing to see here</div>

                                        <div class="col s6 predetermined noLeftPad <? if ($hide == 1) echo "hide"; ?>">
                                            <div class="preWrapper">
                                                <div class="beneItem <? if ($brb1 < 1) echo 'hidden'; ?>" id="beneOne">
                                                <input name="eehi" type="hidden" value=-1 />
                                                <input type="hidden" id="brb1" name="brb1" value=<? echo $brb1; ?>>
                                                <span class="cedr-blue-font beneTitle">Health Insurance</span>
                                                <p>
                                                    <input <? if ($eehi == 1) echo 'checked'; ?> id="HiYes" name="eehi" type="radio" value=1 checked />
                                                    <label for="HiYes">Yes</label>
                                                </p>
                                                <p>
                                                    <input <? if ($eehi == 0) echo 'checked'; ?> id="HiNo" name="eehi" type="radio" value=0 />
                                                    <label for="HiNo">No</label>
                                                </p>
                                                </div>
                                                <div class="beneItem <? if ($brb2 < 1) echo 'hidden'; ?>" id="beneTwo">
                                                    <input name="eedi" type="hidden" value=-1 />
                                                    <input type="hidden" id="brb2" name="brb2" value=<? echo $brb2; ?>>
                                                    <span class="cedr-blue-font beneTitle">Dental Insurance</span>
                                                    <p>
                                                        <input <? if ($eedi == 1) echo 'checked'; ?> id="DiYes" name="eedi" type="radio" value=1 checked  />
                                                        <label for="DiYes">Yes</label>
                                                    </p>
                                                    <p>
                                                        <input <? if ($eedi == 0) echo 'checked'; ?> id="DiNo" name="eedi" type="radio" value=0 />
                                                        <label for="DiNo">No</label>
                                                    </p>
                                                </div>
                                                <div class="beneItem <? if ($brb3 < 1) echo 'hidden'; ?>" id="beneThree">
                                                    <input name="eevi" type="hidden" value=-1 />
                                                    <input type="hidden" id="brb3" name="brb3" value=<? echo $brb3; ?>>
                                                    <span class="cedr-blue-font beneTitle">Vision Insurance</span>
                                                    <p>
                                                        <input <? if ($eevi == 1) echo 'checked'; ?> id="ViYes" name="eevi" type="radio"  value=1 checked  />
                                                        <label for="ViYes">Yes</label>
                                                    </p>
                                                    <p>
                                                        <input <? if ($eevi == 0) echo 'checked'; ?> id="ViNo" name="eevi" type="radio" value=0 />
                                                        <label for="ViNo">No</label>
                                                    </p>
                                                </div>
                                                <div class="beneItem <? if ($brb4 < 1) echo 'hidden'; ?>" id="beneFour">
                                                    <input name="eeki" type="hidden" value=-1 />
                                                    <input type="hidden" id="brb4" name="brb4" value=<? echo $brb4; ?>>
                                                    <span class="cedr-blue-font beneTitle">401k</span>
                                                    <p>
                                                        <input <? if ($eeki == 1) echo 'checked'; ?> id="401KYes" name="eeki" type="radio" value=1 checked  />
                                                        <label for="401KYes">Yes</label>
                                                    </p>
                                                    <p>
                                                        <input <? if ($eeki == 0) echo 'checked'; ?> id="401KNo" name="eeki" type="radio" value=0 />
                                                        <label for="401KNo">No</label>
                                                    </p>
                                                </div>
                                                <div class="beneItem <? if ($brb5 < 1) echo 'hidden'; ?>" id="beneFive">
                                                    <input name="eefi" type="hidden" value=-1 />
                                                    <input type="hidden" id="brb5" name="brb5" value=<? echo $brb5; ?>>
                                                    <span class="cedr-blue-font beneTitle">Flex Spending Account</span>
                                                    <p>
                                                        <input <? if ($eefi == 1) echo 'checked'; ?> id="flexAccYes" name="eefi" type="radio" value=1 checked  />
                                                        <label for="flexAccYes">Yes</label>
                                                    </p>
                                                    <p>
                                                        <input <? if ($eefi == 0) echo 'checked'; ?> id="flexAccNo" name="eefi" type="radio" value=0 />
                                                        <label for="flexAccNo">No</label>
                                                    </p>
                                                </div>
                                                <div class="beneItem <? if (($brb6 < 1) or ($brb1 + $brb2 + $brb3 + $brb4 + $brb5 >= 5)) echo 'hidden'; ?>" id="beneSix">
                                                    <input name="eeaix" type="hidden" value=-1 />
                                             
                                                    <span class="cedr-blue-font beneTitle">Aflac</span>
                                                    <p>
                                                        <input <? if ($eeai == 1) echo 'checked'; ?> id="AflYes" name="eeaix" type="radio" value=1 />
                                                        <label for="AflYes">Yes</label>
                                                    </p>
                                                    <p>
                                                        <input <? if ($eeai == 0) echo 'checked'; ?> id="AflNo" name="eeaix" type="radio" value=0 />
                                                        <label for="AflNo">No</label>
                                                    </p>
                                                </div>
                                                <div class="beneItem <? if (($brb7 < 1) or ($brb1 + $brb2 + $brb3 + $brb4 + $brb5  + $brb6 >= 5)) echo 'hidden'; ?>" id="beneSeven">
                                                    <input name="eeo1x" type="hidden" value=-1 />
                                                    
                                                    <span class="cedr-blue-font beneTitle"><? echo $other0label; ?></span>
                                                    <p>
                                                        <input <? if ($eeo1 == 1) echo 'checked'; ?> id="other1Yes" name="eeo1x" type="radio " value=1  checked  />
                                                        <label for="other1Yes">Yes</label>
                                                    </p>
                                                    <p>
                                                        <input <? if ($eeo1 == 0) echo 'checked'; ?> id="other1No" name="eeo1x" type="radio" value=0 />
                                                        <label for="other1No">No</label>
                                                    </p>
                                                </div>
                                                <div class="beneItem <? if (($brb8 < 1) or ($brb1 + $brb2 + $brb3 + $brb4 + $brb5  + $brb6 + $brb7 >= 5)) echo 'hidden'; ?>" id="beneEight">
                                                    <input name="eeo2x" type="hidden" value=-1 />
                                                    
                                                    <span class="cedr-blue-font beneTitle"><? echo $other1label; ?></span>
                                                    <p>
                                                        <input <? if ($eeo2 == 1) echo 'checked'; ?> id="other2Yes" name="eeo2x" type="radio" value=1 checked  />
                                                        <label for="other2Yes">Yes</label>
                                                    </p>
                                                    <p>
                                                        <input <? if ($eeo2 == 0) echo 'checked'; ?> id="other2No" name="eeo2x" type="radio" value=0 />
                                                        <label for="other2No">No</label>
                                                    </p>
                                                </div>
                                                <div class="beneItem <? if (($brb9 < 1) or ($brb1 + $brb2 + $brb3 + $brb4 + $brb5  + $brb6 + $brb7 + $brb8 >= 5)) echo 'hidden'; ?>" id="beneNine">
                                                    <input name="eeo3x" type="hidden" value=-1 />
                                                   
                                                    <span class="cedr-blue-font beneTitle"><? echo $other2label; ?></span>
                                                    <p>
                                                        <input <? if ($eeo3 == 1) echo 'checked'; ?> id="other3Yes" name="eeo3x" type="radio" value=1 checked  />
                                                        <label for="other3Yes">Yes</label>
                                                    </p>
                                                    <p>
                                                        <input <? if ($eeo3 == 0) echo 'checked'; ?> id="other3No" name="eeo3x" type="radio" value=0 />
                                                        <label for="other3No">No</label>
                                                    </p>
                                                </div>
                                                <div class="beneItem <? if (($brb10 < 1) or ($brb1 + $brb2 + $brb3 + $brb4 + $brb5  + $brb6 + $brb7 + $brb8 + $brb9 >= 5)) echo 'hidden'; ?>" id="beneTen">
                                                    <input name="eeo4x" type="hidden" value=-1 />
                                                    
                                                    <span class="cedr-blue-font beneTitle"><? echo $other3label; ?></span>
                                                    <p>
                                                        <input <? if ($eeo4 == 1) echo 'checked'; ?> id="other4Yes" name="eeo4x" type="radio" value=1 checked  />
                                                        <label for="other4Yes">Yes</label>
                                                    </p>
                                                    <p>
                                                        <input <? if ($eeo4 == 0) echo 'checked'; ?> id="other4No" name="eeo4x" type="radio" value=0 />
                                                        <label for="other4No">No</label>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="vertDivider"></div>
                                        </div>

                                        <div class="col s6 addedInsurance noLeftPad <? if ($hide == 1) echo "hide"; ?>">
                                           <div class="beneItem <? if (($brb6 < 1) or ($brb1 + $brb2 + $brb3 + $brb4 + $brb5 < 5)) echo 'hidden'; ?>" id="beneSix">
                                                <input name="eeai" type="hidden" value=-1 />
                                                <input type="hidden" id="brb6" name="brb6" value=<? echo $brb6; ?>>
                                                <span class="cedr-blue-font beneTitle">Aflac</span>
                                                <p>
                                                    <input <? if ($eeai== 1) echo 'checked'; ?> id="rightAflYes" name="eeai" type="radio" value=1 />
                                                    <label for="rightAflYes">Yes</label>
                                                </p>
                                                <p>
                                                    <input <? if ($eeai == 0) echo 'checked'; ?> id="rightAflNo" name="eeai" type="radio" value=0 />
                                                    <label for="rightAflNo">No</label>
                                                </p>
                                            </div>
                                            <div class="beneItem <? if (($brb7 < 1) or ($brb1 + $brb2 + $brb3 + $brb4 + $brb5  + $brb6 < 5)) echo 'hidden'; ?>" id="beneSeven">
                                                <input name="eeo1" type="hidden" value=-1 />
                                                <input type="hidden" id="brb7" name="brb7" value=<? echo $brb7; ?>>
                                                <input type="hidden" id="other0label" name="other0label" value="<? echo $other0label; ?>"> 
                                                <span class="cedr-blue-font beneTitle"><? echo $other0label; ?></span>
                                                <p>                                               
                                                 <input <? if ($eeo1 == 1) echo 'checked'; ?> id="rightOther1Yes" name="eeo1" type="radio" value=1  />
                                                    <label for="rightOther1Yes">Yes</label>
                                                </p>
                                                <p>
                                                    <input <? if ($eeo1 == 0) echo 'checked'; ?> id="rightOther1No" name="eeo1" type="radio" value=0 />
                                                    <label for="rightOther1No">No</label>
                                                </p>
                                            </div>
                                            <div class="beneItem <? if (($brb8 < 1) or ($brb1 + $brb2 + $brb3 + $brb4 + $brb5  + $brb6 + $brb7 < 5)) echo 'hidden'; ?>" id="beneEight">
                                                <input name="eeo2" type="hidden" value=-1 />
                                                <input type="hidden" id="brb8" name="brb8" value=<? echo $brb8; ?>>
                                                <input type="hidden" id="other1label" name="other1label" value="<? echo $other1label; ?>"> 
                                                <span class="cedr-blue-font beneTitle"><? echo $other1label; ?></span>
                                                <p>
                                                    <input <? if ($eeo2 == 1) echo 'checked'; ?> id="rightOther2Yes" name="eeo2" type="radio" value=1 />
                                                    <label for="rightOther2Yes">Yes</label>
                                                </p>
                                                <p>
                                                    <input <? if ($eeo2 == 0) echo 'checked'; ?> id="rightOther2No" name="eeo2" type="radio" value=0 />
                                                    <label for="rightOther2No">No</label>
                                                </p>
                                            </div>
                                            <div class="beneItem <? if (($brb9 < 1) or ($brb1 + $brb2 + $brb3 + $brb4 + $brb5  + $brb6 + $brb7 + $brb8 < 5)) echo 'hidden'; ?>" id="beneNine">
                                                <input name="eeo3" type="hidden" value=-1 />
                                                <input type="hidden" id="brb9" name="brb9" value=<? echo $brb9; ?>>
                                                <input type="hidden" id="other2label" name="other2label" value="<? echo $other2label; ?>"> 
                                                <span class="cedr-blue-font beneTitle"><? echo $other2label; ?></span>
                                                <p>
                                                    <input <? if ($eeo3 == 1) echo 'checked'; ?> id="rightOther3Yes" name="eeo3" type="radio" value=1 />
                                                    <label for="rightOther3Yes">Yes</label>
                                                </p>
                                                <p>
                                                    <input <? if ($eeo3 == 0) echo 'checked'; ?> id="rightOther3No" name="eeo3" type="radio" value=0 />
                                                    <label for="rightOther3No">No</label>
                                                </p>
                                            </div>
                                            <div class="beneItem <? if (($brb10 < 1) or ($brb1 + $brb2 + $brb3 + $brb4 + $brb5  + $brb6 + $brb7 + $brb8 + $brb9 < 5)) echo 'hidden'; ?>" id="beneTen">
                                                <input name="eeo4" type="hidden" value=-1 />
                                                <input type="hidden" id="brb10" name="brb10" value=<? echo $brb10; ?>>
                                                <input type="hidden" id="other3label" name="other3label" value="<? echo $other3label; ?>"> 
                                                <span class="cedr-blue-font beneTitle"><? echo $other3label; ?></span>
                                                <p>
                                                    <input <? if ($eeo4 == 1) echo 'checked'; ?> id="rightOther4Yes" name="eeo4" type="radio" value=1 />
                                                    <label for="rightOther4Yes">Yes</label>
                                                </p>
                                                <p>
                                                    <input <? if ($eeo4 == 0) echo 'checked'; ?> id="rightOther4No" name="eeo4" type="radio" value=0 />
                                                    <label for="rightOther4No">No</label>
                                            </p>
                                             </div>
                                        <div class="vertDivider"></div>
                                    </div>
                                </div>
                                <!-- permissions-section desktop-->                            
                                <div class="benes permissions-section clearfix for_desktop employee_1">
                                    <h4><i class="fa fa-lock"></i>Permissions* <span class="beneButton" id="employee_modal"><i class="fa fa-pencil-square-o"></i></span>
                                        <div class="info-box profile5-part profile5-icon">
                                            <i class="fa fa-question-circle"></i>
                                             <div class="info">
                                                <b>HINT:</b>
                                                <span>You do not have permission to edit this information. Please contact your admin.</span>
                                             </div>
                                         </div>
                                     </h4>
                                    <div class="col s2 l-20 employee_level">
                                        <b class="cedr-blue-font">Level</b>
                                        <p>Employee</p>
                                    </div>
                                        <!-- profile 8 -->
                                        <div class="profile8">
                                                    <div class="col s4 who_can_see_section" style=""><h3 class="cedr-blue-font beneTitle">Who can this employee see?</h3><div class="col s6"><b class="cedr-blue-font">Manager(s)</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6">
                                                          <p>Burdett, Anna</p>
                                                        </div>
                                                        <div class="col s6"><div class="records-checkbox">
                                            <input name="eedi2" type="checkbox" checked="" disabled="">
                                            <label for=""></label>
                                        </div><div class="pay-checkbox">
                                              <input name="eedi2" type="checkbox" disabled="" checked="">
                                              <label for=""></label>
                                          </div></div><div class="col s6">
                                                          <p>Owens, Marvin</p>
                                                        </div>
                                                        <div class="col s6"><div class="records-checkbox">
                                            <input name="eedi2" type="checkbox" checked="" disabled="">
                                            <label for=""></label>
                                        </div><div class="pay-checkbox">
                                              <input name="eedi2" type="checkbox" disabled="" checked="">
                                              <label for=""></label>
                                          </div></div></div><div class="horzDivider w90"></div><div class="col s6"><b class="cedr-blue-font">Employee(s)</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6">
                                                          <p>Caralenno, Maria</p>
                                                        </div>
                                                        <div class="col s6"><div class="records-checkbox">
                                            <input name="eedi2" type="checkbox" checked="" disabled="">
                                            <label for=""></label>
                                        </div><div class="pay-checkbox">
                                              <input name="eedi2" type="checkbox" disabled="" checked="">
                                              <label for=""></label>
                                          </div></div><div class="col s6">
                                                          <p>Hart, Michael</p>
                                                        </div>
                                                        <div class="col s6"><div class="records-checkbox">
                                            <input name="eedi2" type="checkbox" checked="" disabled="">
                                            <label for=""></label>
                                        </div><div class="pay-checkbox">
                                              <input name="eedi2" type="checkbox" disabled="" checked="">
                                              <label for=""></label>
                                          </div></div><div class="col s6">
                                                          <p>Howard, Katherine</p>
                                                        </div>
                                                        <div class="col s6"><div class="records-checkbox">
                                            <input name="eedi2" type="checkbox" checked="" disabled="">
                                            <label for=""></label>
                                        </div><div class="pay-checkbox">
                                              <input name="eedi2" type="checkbox" disabled="" checked="">
                                              <label for=""></label>
                                          </div></div></div><div class="horzDivider w90"></div></div>
                                        </div>
                                        <!-- /profile 8 -->
                                        <div class="col s4 who_can_see_section">

                                   <h3 class="cedr-blue-font beneTitle">Who can see this employee?</h3><div class="col s6"><b class="cedr-blue-font">Owner</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6">
                                              <p>Pitteroff, Phillip</p>
                                            </div>
                                            <div class="col s6"><div class="records-checkbox">
                                <input name="eedi2" type="checkbox" checked="" disabled="">
                                <label for=""></label>
                            </div><div class="pay-checkbox">
                                  <input name="eedi2" type="checkbox" disabled="" checked="">
                                  <label for=""></label>
                              </div></div></div>

                              <div class="horzDivider w90"></div>
                                <!-- profile 1 section -->
                                
                                  <div class="profile1">

                                    <div class="col s6">
                                        <b class="cedr-blue-font">Admin(s)</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6">
                                                      <p>Ronald Gallo</p>
                                                    </div>
                                                    <div class="col s6"><div class="records-checkbox">
                                        <input name="eedi2" type="checkbox" checked="" disabled="">
                                        <label for=""></label>
                                     </div><div class="pay-checkbox">
                                          <input name="eedi2" type="checkbox" disabled="" checked="">
                                          <label for=""></label>
                                      </div></div><div class="col s6">
                                                      <p>Shannon Walters</p>
                                                    </div>
                                                    <div class="col s6"><div class="records-checkbox">
                                        <input name="eedi2" type="checkbox" checked="" disabled="">
                                        <label for=""></label>
                                        </div><div class="pay-checkbox">
                                          <input name="eedi2" type="checkbox" disabled="" checked="">
                                          <label for=""></label>
                                      </div></div></div>
                                      <div class="horzDivider w90"></div>
                                  </div>
                              
                              <!-- profile 1 section -->


                          </div>
                                    
                                   

                                   <div class="col s4 more-permission profile3-part" style="display: none;">
                                    <h3 class="cedr-blue-font beneTitle">Who can this employee see?</h3>

                                    <!-- profile 6 -->
                                    <div class="profile6">
    <div class="col s6"><b class="cedr-blue-font">Admin(s)</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6">
                                              <p>Gallo, Ronald</p>
                                            </div>
                                            <div class="col s6"><div class="records-checkbox">
                                <input name="eedi2" type="checkbox" checked="" disabled="">
                                <label for=""></label>
                            </div><div class="pay-checkbox">
                                  <input name="eedi2" type="checkbox" disabled="" checked="">
                                  <label for=""></label>
                              </div></div><div class="col s6">
                                              <p>Walters, Shannon</p>
                                            </div>
                                            <div class="col s6"><div class="records-checkbox">
                                <input name="eedi2" type="checkbox" checked="" disabled="">
                                <label for=""></label>
                            </div><div class="pay-checkbox">
                                  <input name="eedi2" type="checkbox" disabled="" checked="">
                                  <label for=""></label>
                                                </div></div></div><div class="horzDivider w90"></div>
                                            </div>
                                    <!-- /profile 6 -->

                                    <div class="col s6"><b class="cedr-blue-font">Manager(s)</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6">
                                              <p>Burdett, Anna</p>
                                            </div>
                                            <div class="col s6"><div class="records-checkbox">
                                <input name="eedi2" type="checkbox" checked="" disabled="">
                                <label for=""></label>
                            </div><div class="pay-checkbox">
                                  <input name="eedi2" type="checkbox" disabled="" checked="">
                                  <label for=""></label>
                              </div></div><div class="col s6">
                                              <p>Owens, Marvin</p>
                                            </div>
                                            <div class="col s6"><div class="records-checkbox">
                                <input name="eedi2" type="checkbox" checked="" disabled="">
                                <label for=""></label>
                            </div><div class="pay-checkbox">
                                  <input name="eedi2" type="checkbox" disabled="" checked="">
                                  <label for=""></label>
                              </div></div></div><div class="horzDivider w90"></div><div class="col s6"><b class="cedr-blue-font">Employee(s)</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6">
                                              <p>Caralenno, Maria</p>
                                            </div>
                                            <div class="col s6"><div class="records-checkbox">
                                <input name="eedi2" type="checkbox" checked="" disabled="">
                                <label for=""></label>
                            </div><div class="pay-checkbox">
                                  <input name="eedi2" type="checkbox" disabled="" checked="">
                                  <label for=""></label>
                              </div></div><div class="col s6">
                                              <p>Hart, Michael</p>
                                            </div>
                                            <div class="col s6"><div class="records-checkbox">
                                <input name="eedi2" type="checkbox" checked="" disabled="">
                                <label for=""></label>
                            </div><div class="pay-checkbox">
                                  <input name="eedi2" type="checkbox" disabled="" checked="">
                                  <label for=""></label>
                              </div></div><div class="col s6">
                                              <p>Howard, Katherine</p>
                                            </div>
                                            <div class="col s6"><div class="records-checkbox">
                                <input name="eedi2" type="checkbox" checked="" disabled="">
                                <label for=""></label>
                            </div><div class="pay-checkbox">
                                  <input name="eedi2" type="checkbox" disabled="" checked="">
                                  <label for=""></label>
                              </div></div><div class="col s6">
                                              <p>Mills, Vicki</p>
                                            </div>
                                            <div class="col s6"><div class="records-checkbox">
                                <input name="eedi2" type="checkbox" checked="" disabled="">
                                <label for=""></label>
                            </div><div class="pay-checkbox">
                                  <input name="eedi2" type="checkbox" disabled="" checked="">
                                  <label for=""></label>
                              </div></div><div class="col s6">
                                              <p>John, Doe</p>
                                            </div>
                                            <div class="col s6"><div class="records-checkbox">
                                <input name="eedi2" type="checkbox" checked="" disabled="">
                                <label for=""></label>
                            </div><div class="pay-checkbox">
                                  <input name="eedi2" type="checkbox" disabled="" checked="">
                                  <label for=""></label>
                              </div></div></div><div class="horzDivider w90"></div></div>
                                </div>
                               
                                <!-- /permissions-section -->
                            </div>
                             <!--  /hidden_fields section  -->
                        </div>
                        <a href="#post-35458" class="orangeButton for_mobile">View Advanced</a>
                    </div>
                </div>
                
                      

                <div class="controlWrapper clearfix addEmployeeControls eeBelow">
                    <a href="#cancel_modal" type="submit" name="buttonchoice" class="cancelButton cedr-darkgray-font cancel_modal_btn profile_1_2_3_4_6">Cancel</a> <span class="orSpan">or&nbsp;</span>
                    <button style="margin-right:0" onclick="return valthis();" class="orangeButton add_employee_btn" onclick='window.location.href="https://www.cedrsolutions.com/membership/sandbox4/efolders/)"'>Save</button>
                </div>
            </div>
        </div>
    </div>
    </form>

    <!-- Insurance Modal -->
    <div id="insuranceModal" class="modal masterModal">
        <form id="insuranceInfo" name="insuranceInfo" method="post" action="#">
            <div class="modal-content">
                <h4>Which benefits does your office offer?</h4>
                <p class="p1 cedr-darkgray-font center">Please select all that apply.</p>
                <div class="insuranceSelectors">
                    <div class="row">
                        <div class="col s6 insuranceChoices">
                            <p>
                                <input data-id="beneOne" id="modal-Hi" type="checkbox" class="filled-in original" <? if ($brb1 == 1) echo'checked'; ?> value="Health Insurance"/>
                                <label for="modal-Hi">Health Insurance</label>
                            </p>
                            <p>
                                <input data-id="beneTwo" id="modal-Di" type="checkbox" class="filled-in original" <? if ($brb2== 1) echo'checked'; ?>  value="Dental Insurance" />
                                <label for="modal-Di">Dental Insurance</label>
                            </p>
                            <p>
                                <input data-id="beneThree" id="modal-Vi" type="checkbox" class="filled-in original" <? if ($brb3 == 1) echo'checked'; ?>  value="Vision Insurance" />
                                <label for="modal-Vi">Vision Insurance</label>
                            </p>
                            <p>
                                <input data-id="beneFour" id="modal-401k" type="checkbox" class="filled-in original" <? if ($brb4 == 1) echo'checked'; ?>  value="401k" />
                                <label for="modal-401k">401k</label>
                            </p>
                            <p>
                                <input data-id="beneFive" id="modal-flex" type="checkbox" class="filled-in original" <? if ($brb5 == 1) echo'checked'; ?> " value="Flex Spending Account" />
                                <label for="modal-flex">Flex Spending Account</label>
                            </p>
                        </div>
                        <div class="col s6 insuranceChoices right">
                            <p>
                                <input data-id="beneSix" id="modal-aflac" type="checkbox" class="filled-in original" <? if ($brb6 == 1) echo'checked'; ?>  value="Aflac" />
                                <label for="modal-aflac">Aflac</label>
                            </p>
                            <p class="otherP">
                                <input data-id="beneSeven" id="modal-other0" type="checkbox" class="filled-in hiddenTrigger" <? if ($brb7 == 1) echo'checked'; ?>  val="" />
                                <label for="modal-other0">Other</label>
                                <span class="hiddenOther <? if ($brb7 == 1) echo 'show'; ?>">
                                      <input id="inputother0" maxlength="30" class="otherCheckInput" name="inputother0" type="text" placeholder="Please Specify" value="<? echo $other0label; ?>"/> 
                                </span>
                            </p>
                            <p class="otherP">
                                <input data-id="beneEight" id="modal-other1" type="checkbox" class="filled-in hiddenTrigger"  <? if ($brb8 == 1) echo'checked'; ?> val="" />
                                <label for="modal-other1">Other</label>
                                <span class="hiddenOther <? if ($brb8 == 1) echo 'show'; ?>">
                                      <input id="inputother1" maxlength="30" class="otherCheckInput" name="inputother1" type="text" placeholder="Please Specify" value="<? echo $other1label; ?>"/> 
                                </span>
                            </p>
                            <p class="otherP">
                                <input data-id="beneNine" id="modal-other2" type="checkbox" class="filled-in hiddenTrigger" <? if ($brb9 == 1) echo'checked'; ?>  val="" />
                                <label for="modal-other2">Other</label>
                                <span class="hiddenOther <? if ($brb9 == 1) echo 'show'; ?>">
                                      <input id="inputother2" maxlength="30" class="otherCheckInput" name="inputother2" type="text" placeholder="Please Specify" value="<? echo $other2label; ?>"/> 
                                </span>
                            </p>
                            <p class="otherP">
                                <input data-id="beneTen" id="modal-other3" type="checkbox" class="filled-in hiddenTrigger"  <? if ($brb10 == 1) echo'checked'; ?> val="" />
                                <label for="modal-other3">Other</label>
                                <span class="hiddenOther <? if ($brb10 == 1) echo 'show'; ?>">
                                      <input id="inputother3" maxlength="30" class="otherCheckInput" name="inputother3" type="text" placeholder="Please Specify" value="<? echo $other3label; ?>"/> 
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="modalDivider"></div>
                </div>
                <div class="controlWrapper">
                    <a href="javascript:void(0);" type="submit" name="buttonchoice" class="cancelButton cedr-darkgray-font modal-close">Cancel</a>
                    <span class="orSpan">or &nbsp;</span>
                    <button onclick='
                        if (document.getElementById("modal-Hi").checked) {document.getElementById("brb1").value = 1;} else {document.getElementById("brb1").value = 0;};
                        if (document.getElementById("modal-Di").checked) {document.getElementById("brb2").value = 1;} else {document.getElementById("brb2").value = 0;};
                        if (document.getElementById("modal-Vi").checked) {document.getElementById("brb3").value = 1;} else {document.getElementById("brb3").value = 0;};
                        if (document.getElementById("modal-401k").checked) {document.getElementById("brb4").value = 1;} else {document.getElementById("brb4").value = 0;};
                        if (document.getElementById("modal-flex").checked) {document.getElementById("brb5").value = 1;} else {document.getElementById("brb5").value = 0;};
                        if (document.getElementById("modal-aflac").checked) {document.getElementById("brb6").value = 1;} else {document.getElementById("brb6").value = 0;};
                        if (document.getElementById("modal-other0").checked) {document.getElementById("brb7").value = 1;} else {document.getElementById("brb7").value = 0;};
                        if (document.getElementById("modal-other1").checked) {document.getElementById("brb8").value = 1;} else {document.getElementById("brb8").value = 0;};
                        if (document.getElementById("modal-other2").checked) {document.getElementById("brb9").value = 1;} else {document.getElementById("brb9").value = 0;};
                        if (document.getElementById("modal-other3").checked) {document.getElementById("brb10").value = 1;} else {document.getElementById("brb10").value = 0;};
                        if (document.getElementById("modal-other0").checked) document.getElementById("other0label").value = document.getElementById("inputother0").value;
                        if (document.getElementById("modal-other1").checked) document.getElementById("other1label").value = document.getElementById("inputother1").value;
                        if (document.getElementById("modal-other2").checked) document.getElementById("other2label").value = document.getElementById("inputother2").value;
                        if (document.getElementById("modal-other3").checked) document.getElementById("other3label").value = document.getElementById("inputother3").value;'
                        id="insuranceUpdate" style="margin-right:0" class="orangeButton"><i class="fa fa-save"></i>&nbsp;Save</button>
                </div>
            </div>
        </form>
    </div>



    <? }  else { ?>

   <!-- Employee Login Profile - Jimmy Employee -->
    <div class="EEEdit twoColEEedit">
        <div class="col s12 rightColumn oneColumn masterFiles masterFileEEList editInfo editSame">
            <div class="island active">
                <div class="titleWrapper activeTab">
                    <i class="fa fa-user" aria-hidden="true"></i> View/Edit
                    <? if ($myusername == $email) echo 'Profile'; else echo 'Info' ?>
                </div>
                <div class="islandContent profile5_disables profile5view">
                    <div class="row">
                        <div class="col avatarEdit s2">
                            <img class="circle avatar" height="131px" width="131px" src="/membership/sandbox4/showfile.php?num=<? echo $empnum; ?>" onerror="this.src='<?php echo get_bloginfo('template_directory'); ?>/images/default.png'" />
                            <form enctype="multipart/form-data" action="/membership/sandbox4/uploadprofileonly.php" method="post">
                                <div style="display:none;">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="99999999" />
                                    <input type="hidden" name="num" id="num" value="<? echo $empnum;?>" />
                                    <input type="checkbox" class="attachIDs" name="toDeleteIDs" />
                                </div>
                                 <span class="for_mobile">
                                  <h2 class="EEname"><? echo "$lname, $fname"; ?></h2>
                                </span>
                                <input style="display:block;" type="button" value="Change Profile Pic" class="orangeButton" onclick="document.getElementById('fileID').click(); formname.submit(); return false;" />
                                <div style="display:none;">
                                    <input name="userfile" onchange="this.form.submit();" type="file" id="fileID" style="visibility: hidden;" />
                                </div>
                            </form>
                        </div>
                        <div class="col infoEdit s10">
                          <span class="for_desktop">
                            <h2 class="EEname"><? echo "$lname, $fname"; ?></h2>
                          </span>
                            <!-- <p class="p1 cedr-darkgray-font lastLogin">Last Logged in: {Date}</p> -->
                            <form name="mod-employee" method="post" action="/membership/sandbox4/mod_employee_mem.php">

                  <!--  hidden_fields section  -->
                <div class="hidden_fields"> 
                      <div class="personalSectionWrapper">
                                    <div style="display:none;"> 
                                        <input type="hidden" name="empnum" id="empnum" value="<? echo $empnum;?>" />
                                        <input type="hidden" name="memlevel" id="memlevel" value="<? echo $memlevel;?>" />
                                    </div>
                                    <div class="infoSection">
                                     <!--    <h4><i class="fa fa-user"></i>Personal - Employee Login</h4> -->
                                         <h4><i class="fa fa-user"></i>Personal</h4>
                                    </div>
                                    <div class="col s6 noLeftPad">
                                        <label for="fName">First Name*</label>
                                        <input type="text" name="fname" id="fname" value="<? echo $fname; ?>" required>
                                    </div>
                                    <div class="col s6">
                                        <label for="lName">Last Name*</label>
                                        <input type="text" name="lname" id="lname" value="<? echo $lname; ?>" required>
                                    </div>
                                    <div class="col s6 noLeftPad">
                                       <!--  <label <? if ($memlevel == 4) echo 'class="grayed"'; ?> for="workEmail">Email (Work)</label>
                                        <input <? if ($memlevel == 4) echo 'readonly'; ?> type="email" name="email" id="workEmail" value="<? echo $email; ?>" required> -->
                                        <label class="graayed" for="workEmail">Email (Work)*</label>
                                        <input readonly type="email" name="email" id="workEmail" value="<? echo $email; ?>" required>
                                    </div>
                                    <br>
                                    <h4 id="per-heading"><i class="fa fa-lock"></i>Permissions</h4>
                                    <div class="col s2 noRightPad smaller2 only_permission_level">
                                        <label for="memlevel">Level*</label>
                                        <select required name="memlevel" class="browser-default" id="designation_level">

                                        <!-- <? //if ($memlevel == 4) echo '<option selected  value="4">Owner</option>'; ?> -->
                                        <? if ($mylevelcheck > 3) if ($memlevel == 5) echo '<option selected value="5">Admin</option>'; else echo '<option value="5">Admin</option>'; ?>
                                        <? if ($memlevel == 3) echo '<option selected value="3">Manager</option>'; else echo '<option value="3">Manager</option>'; ?>
                                        <? if ($memlevel == 1)  echo '<option selected value="1">Employee</option>'; else echo '<option value="1">Employee</option>'; ?>                          
                                        </select>
                                    </div>
                                    <div class="col s6">
                                        <label for="personalEmail">Email (Personal)</label>
                                        <input type="email" name="email2" id="personalEmail" value="<? echo $email2; ?>">
                                    </div>
                                    <div class="col s5 noLeftPad add_emp_hide_field">
                                        <label for="hPhone">Home Phone</label>
                                        <input type="text" name="hphone" id="hPhone" value="<? echo $phone; ?>">
                                    </div>
                                    <div class="col s5">
                                        <label for="cPhone">Cell Phone</label>
                                        <input type="text" name="cphone" id="cPhone" value="<? echo $cphone; ?>">
                                    </div>
                                    <div class="col s2 dateAnchor">
                                        <label for="dateofbirth">Date of Birth</label>
                                        <input class="" type="text" name="dob" id="dateofbirth" value="<? echo $dob; ?>">
                                    </div>
                                    <div class="col s10 noLeftPad">
                                        <label for="street">Street Address</label>
                                        <input type="text" name="street" id="street" value="<? echo $street; ?>">
                                    </div>
                                    <div class="col s2">
                                        <label for="apt">Apt/Ste</label>
                                        <input type="text" name="apt" id="apt" value="<? echo $apt; ?>">
                                    </div>
                                    <div class="col s6 noLeftPad">
                                        <label for="city">City</label>
                                        <input type="text" name="city" id="city" value="<? echo $city; ?>">
                                    </div>
                                    <div class="col s2 stateSelect">
                                        <label for="state">State</label>
                                            <select name="state" class="browser-default">
                                                <option <? if ($state=="AL" ) echo 'selected'; ?> value="AL">Alabama</option>
                                                <option <? if ($state=="AK" ) echo 'selected'; ?> value="AK">Alaska</option>
                                                <option <? if ($state=="AZ" ) echo 'selected'; ?> value="AZ">Arizona</option>
                                                <option <? if ($state=="AR" ) echo 'selected'; ?> value="AR">Arkansas</option>
                                                <option <? if ($state=="CA" ) echo 'selected'; ?> value="CA">California</option>
                                                <option <? if ($state=="CO" ) echo 'selected'; ?> value="CO">Colorado</option>
                                                <option <? if ($state=="CT" ) echo 'selected'; ?> value="CT">Connecticut</option>
                                                <option <? if ($state=="DE" ) echo 'selected'; ?> value="DE">Delaware</option>
                                                <option <? if ($state=="DC" ) echo 'selected'; ?> value="DC">District of Columbia</option>
                                                <option <? if ($state=="Fl" ) echo 'selected'; ?> value="FL">Florida</option>
                                                <option <? if ($state=="GA" ) echo 'selected'; ?> value="GA">Georgia</option>
                                                <option <? if ($state=="HI" ) echo 'selected'; ?> value="HI">Hawaii</option>
                                                <option <? if ($state=="ID" ) echo 'selected'; ?> value="ID">Idaho</option>
                                                <option <? if ($state=="IL" ) echo 'selected'; ?> value="IL">Illinois</option>
                                                <option <? if ($state=="IN" ) echo 'selected'; ?> value="IN">Indiana</option>
                                                <option <? if ($state=="IA" ) echo 'selected'; ?> value="IA">Iowa</option>
                                                <option <? if ($state=="KS" ) echo 'selected'; ?> value="KS">Kansas</option>
                                                <option <? if ($state=="KY" ) echo 'selected'; ?> value="KY">Kentucky</option>
                                                <option <? if ($state=="LA" ) echo 'selected'; ?> value="LA">Louisiana</option>
                                                <option <? if ($state=="ME" ) echo 'selected'; ?> value="ME">Maine</option>
                                                <option <? if ($state=="MD" ) echo 'selected'; ?> value="MD">Maryland</option>
                                                <option <? if ($state=="MA" ) echo 'selected'; ?> value="MA">Massachusetts</option>
                                                <option <? if ($state=="MI" ) echo 'selected'; ?> value="MI">Michigan</option>
                                                <option <? if ($state=="MN" ) echo 'selected'; ?> value="MN">Minnesota</option>
                                                <option <? if ($state=="MS" ) echo 'selected'; ?> value="MS">Mississippi</option>
                                                <option <? if ($state=="MO" ) echo 'selected'; ?> value="MO">Missouri</option>
                                                <option <? if ($state=="MT" ) echo 'selected'; ?> value="MT">Montana</option>
                                                <option <? if ($state=="NE" ) echo 'selected'; ?> value="NE">Nebraska</option>
                                                <option <? if ($state=="NV" ) echo 'selected'; ?> value="NV">Nevada</option>
                                                <option <? if ($state=="NH" ) echo 'selected'; ?> value="NH">New Hampshire</option>
                                                <option <? if ($state=="NJ" ) echo 'selected'; ?> value="NJ">New Jersey</option>
                                                <option <? if ($state=="NM" ) echo 'selected'; ?> value="NM">New Mexico</option>
                                                <option <? if ($state=="NY" ) echo 'selected'; ?> value="NY">New York</option>
                                                <option <? if ($state=="NC" ) echo 'selected'; ?> value="NC">North Carolina</option>
                                                <option <? if ($state=="ND" ) echo 'selected'; ?> value="ND">North Dakota</option>
                                                <option <? if ($state=="OH" ) echo 'selected'; ?> value="OH">Ohio</option>
                                                <option <? if ($state=="OK" ) echo 'selected'; ?> value="OK">Oklahoma</option>
                                                <option <? if ($state=="OR" ) echo 'selected'; ?> value="OR">Oregon</option>
                                                <option <? if ($state=="PA" ) echo 'selected'; ?> value="PA">Pennsylvania</option>
                                                <option <? if ($state=="RI" ) echo 'selected'; ?> value="RI">Rhode Island</option>
                                                <option <? if ($state=="SC" ) echo 'selected'; ?> value="SC">South Carolina</option>
                                                <option <? if ($state=="SD" ) echo 'selected'; ?> value="SD">South Dakota</option>
                                                <option <? if ($state=="TN" ) echo 'selected'; ?> value="TN">Tennessee</option>
                                                <option <? if ($state=="TX" ) echo 'selected'; ?> value="TX">Texas</option>
                                                <option <? if ($state=="UT" ) echo 'selected'; ?> value="UT">Utah</option>
                                                <option <? if ($state=="VT" ) echo 'selected'; ?> value="VT">Vermont</option>
                                                <option <? if ($state=="VA" ) echo 'selected'; ?> value="VA">Virginia</option>
                                                <option <? if ($state=="WA" ) echo 'selected'; ?> value="WA">Washington</option>
                                                <option <? if ($state=="WV" ) echo 'selected'; ?> value="WV">West Virginia</option>
                                                <option <? if ($state=="WI" ) echo 'selected'; ?> value="WI">Wisconsin</option>
                                                <option <? if ($state=="WY" ) echo 'selected'; ?> value="WY">Wyoming</option>
                                            </select>
                                    </div>
                                    <div class="col s2">
                                        <label for="zip">Zip Code</label>
                                        <input type="text" name="zip" id="zip" value="<? echo $zip; ?>">
                                    </div>
                                    <div class="col s2">
                                        <label for="zip">County</label>
                                        <input type="text" name="county" id="county" value="<? echo $county; ?>" >
                                    </div>
                                    <div class="col s6 noLeftPad">
                                        <label for="zip">Emergency Contact Name</label>
                                        <input type="text" name="ecn" id="ecn" value="<? echo $ecn; ?>">
                                    </div>
                                    <div class="col s6 noRightPad">
                                        <label for="zip">Emergency Contact Phone</label>
                                        <input type="text" name="ecp" id="ecp" value="<? echo $ecp; ?>">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                               <!--  <div class="viewEditSpacer"></div> -->

                               <!--  hidden_fields section  -->
                <div class="hidden_fields"> 
                           
                                  <!--   <hr class="workSectionHR"> -->
                                    <!-- Work Section -->
                                    <div class="workSectionWrapper">
                                    <div class="infoSection">
                                        <h4 class="cedr-darkgray-font"><i class="fa fa-building"></i>Work
                                            <div class="info-box profile5-part profile5-icon">
                                                <i class="fa fa-question-circle"></i>
                                                 <div class="info">
                                                    <b>HINT:</b>
                                                    <span>You do not have permission to edit this information. Please contact your admin.</span>
                                                 </div>
                                             </div>
                                        </h4>
                                    </div>
                                    <div class="col s2 noLeftPad dateAnchor add_emp_hide_field">
                                        <label for="hiredate">Hire Date</label>
                                        <input class="" type="text" name="hiredate" id="hiredate" value="<? echo $hiredate; ?>" >
                                    </div>
                                    <div class="col s2 dateAnchor smaller2 add_emp_hide_field">
                                        <label for="reviewdate">Next Review Date</label>
                                        <input class="" type="text" name="reviewdate" id="reviewdate" value="<? echo $reviewdate; ?>" >
                                    </div>

                                    <div class="col s2 smaller2 add_emp_hide_field">
                                        <label for="eeStatus">Exempt Status</label>
                                        <select class="browser-default" name="exemptstatus" id="exemptStatus">
                                            <option value="" disabled selected>Choose One</option>
                                            <option <? if ($exemptstatus == "exempt") echo "selected"; ?> value="exempt">Exempt</option>
                                            <option <? if ($exemptstatus == "nonexempt") echo "selected"; ?> value="nonexempt">Non-exempt</option>
                                        </select>
                                    </div>
                                    <div class="col s2 smaller2 add_emp_hide_field">
                                        <label for="eeStatus">Employment Status</label>
                                        <select class="browser-default" name="eestatus" id="eeStatus">
                                            <option value="" disabled selected>Choose One</option>
                                            <option <? if ($eestatus == "fulltime") echo "selected"; ?> value="fulltime">Full-time</option>
                                            <option <? if ($eestatus == "parttime") echo "selected"; ?> value="parttime">Part-time</option>
                                            <option <? if ($eestatus == "temp") echo "selected"; ?> value="temp">Temporary</option>
                                            <option <? if ($eestatus == "seasonal") echo "selected"; ?> value="seasonal">Seasonal</option>
                                            <option <? if ($eestatus == "flex") echo "selected"; ?> value="flex">Flex-time</option>
                                            <option <? if ($eestatus == "midtime") echo "selected"; ?> value="midtime">Mid-time</option>
                                            <option <? if ($eestatus == "indcont") echo "selected"; ?> value="indcont">Ind. Cont.</option>
                                            <option <? if ($eestatus == "other") echo "selected"; ?> value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col s3 hiddenOther eeStatusOther <? if ($eestatus == 'other') echo 'show'; ?>">
                                        <label for="eeStatusOther" class="for_desktop">&nbsp;</label>
                                        <input id="eeStatusOther" name="eestatusother" type="text" placeholder="Please Specify" value="<? echo $eestatusother; ?>">
                                    </div>


                                     <div class="col s2 noRightPad smaller2 only_permission_level">
                                        <label for="memlevel">Level*</label>
                                        <select required name="memlevel" class="browser-default" id="designation_level">

                                        <!-- <? //if ($memlevel == 4) echo '<option selected  value="4">Owner</option>'; ?> -->
                                        <? if ($mylevelcheck > 3) if ($memlevel == 5) echo '<option selected value="5">Admin</option>'; else echo '<option value="5">Admin</option>'; ?>
                                        <? if ($memlevel == 3) echo '<option selected value="3">Manager</option>'; else echo '<option value="3">Manager</option>'; ?>
                                        <? if ($memlevel == 1)  echo '<option selected value="1">Employee</option>'; else echo '<option value="1">Employee</option>'; ?>                          
                                        </select>
                                    </div>

                                    <div class="col s4 noLeftPad for_desktop">
                                        <label class="grayed" for="office">Office</label>
                                        <input disabled type="text" id="office" value="<? echo $adminofficename; ?>">
                                    </div>
                                    <div class="col s4 locationCol">
                                        <label for="Location">Location</label>
                                        <input type="text" name="location" id="Location" value="<? echo $location; ?>">
                                    </div>
                                    <div class="Separat_date">
                                    <div class="col s2 smaller2 dateAnchor sepDate">
                                        <label for="fireDate">Separation Date</label>
                                        <input class="" type="text" name="firedate" id="fireDate" value="<? echo $firedate; ?>">
                                    </div>
                                    <div class="col s2 smaller2 noRightPad">
                                        <label for="sepReason">Separation Reason</label>
                                        <select name="sepreason" id="sepReason" class="browser-default">
                                            <option value="" disabled selected>Choose One</option>
                                            <option <? if ($sepreason == "voluntary") echo "selected"; ?> value="voluntary">Voluntary</option>
                                            <option <? if ($sepreason == "nonvoluntary") echo "selected"; ?> value="nonvoluntary">Involuntary</option>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="col s3 noLeftPad">
                                        <label for="jobTitle">Job Title</label>
                                        <input type="text" id="jobTitle"  name="jobtitle" value="<? echo $jobtitle; ?>">
                                    </div>
                                    <div class="col s3">
                                        <label for="supervisor">Department</label>
                                        <input type="text" name="department" id="department" value="<? echo $department; ?>">
                                    </div>
                                    <div class="col s3">
                                        <label for="supervisor">Direct Supervisor</label>
                                        <input type="text" id="supervisor" name="supervisorname" value="<? echo $supervisorname; ?>" >
                                    </div>
                                    <div class="col s3 noRightPad twoColeeID">
                                        <label for="eeNum">Employee ID Number</label>
                                        <input type="text"  id="eeNum" name="eenum" value="<? echo $eenum; ?>">
                                    </div>
                                    <? if ($_SESSION['comingfrom'] == '88') { ?>
                                    <div class="col s2 noLeftPad">
                                        <label for="eeNum">SC Record Number</label>
                                        <input type="hidden" id="empcust1_bf" name="empcust1_bf" value="<? echo $emp_cust1; ?>">
                                        <input type="text"  id="empcust1" name="empcust1" value="<? echo $emp_cust1; ?>">
                                    </div>

                                    <div class="col s3">
                                        <label for="eeNum">SC Login</label>
                                        <input type="text" id="usercust1" name="usercust1" value="<? echo $user_cust1; ?>">
                                    </div>
                                        <? } ?>
                                    <div class="clearfix"></div>
                                </div>

    <? if ($mylevelcheck >= $memlevelcheck) { ?>

                                    <hr class="workSectionHR">
                                    <div class="payRate twoColumnPayRate clearfix">
                                        <div class="col s12 payArchiveWrapper">
                                        <div class="infoSection">
                                            <h4 class="cedr-darkgray-font">Pay Archive
                                                <div class="info-box profile5-part profile5-icon">
                                                    <i class="fa fa-question-circle"></i>
                                                     <div class="info">
                                                        <b>HINT:</b>
                                                        <span>You do not have permission to edit this information. Please contact your admin.</span>
                                                     </div>
                                                 </div>
                                            </h4>
                                            <div class="historyWrapper">

    <?
    $timetracks = $wpdb->get_results("select * from payhis where num = $empnum order by STR_TO_DATE(raisedate , '%m/%d/%Y') asc, seq asc;");

    $raisedate = $top = $topother = $rop = $raiseamount = $toplast = $diffrate = array();
    $i = 0;

      foreach($timetracks as $timetrack)
      { 
        $i++;
        $raisedate[$i] = $timetrack->raisedate;
        $top[$i] = $timetrack->top;
        $topother[$i] = $timetrack->topother;
        $rop[$i]= $timetrack->rop;
        $raiseamount[$i] = $rop[$i] - $rop[$i-1];
        $diffrate[$i] = $timetrack->diffrate;
        $seq[$i] = $timetrack->seq;
      }

    if ($i == 0) { ?>


                                                <em class="cedr-lightgray-font center">Nothing to see here</em>

    <? } else {

    $j = $i;

    for ($i = $j; $i > 0; $i--) { ?>





                                                <div class="dataWrapper raiseWrapper" id="${history[index].name}">
                                                    <div class="raises clearfix">
                                                        <div class="col s2 dateAnchor noLeftPad disabledInput">
                                                            <label class="cedr-darkgray-font" for="raiseDate">Date</label>
                                                            <input class="" value="<? echo $raisedate[$i]; ?>" type="text" name="raiseDate" id="raiseDate" disabled>
                                                        </div>
                                                        <div class="col s2 typeofpay disabledInput">
                                                            <label class="cedr-darkgray-font" for="ToP">Type of Pay</label>

                                                        <select name="top" id="ToP" class="browser-default" disabled>
                                                            <option value="" selected disabled>Choose One</option>
                                                            <option <? if ($top[$i] == "hourly") echo 'selected'; ?> value="hourly">Hourly</option>
                                                            <option <? if ($top[$i] == "salary") echo 'Selected'; ?> value="salary">Salary</option>
                                                            <option <? if ($top[$i] == "basepluscommiss") echo 'selected'; ?> value="basepluscommission">Base Pay Plus Commission</option>
                                                            <option <? if ($top[$i] == "commission") echo 'selected'; ?> value="commission">Commission</option>
                                                            <option <? if ($top[$i] == "dailyrate") echo 'selected'; ?> value="dailyrate">Daily Rate</option>
                                                            <option <? if ($top[$i] == "perdiem") echo 'selected'; ?> value="perdiem">Per Diem</option>
                                                            <option <? if ($top[$i] == "other") echo 'selected'; ?> value="other">Other<? if ($top[$i] == 'other') echo ': '.$topother[$i]; ?></option>
                                                        </select>
                                                        </div>
                                                        <div class="col s2 disabledInput">
                                                            <label class="cedr-darkgray-font" for="RoP">Rate of Pay</label>
                                                            <input type="text" value="<? echo $rop[$i]; ?>" id="RoP" disabled>
                                                        </div>
                                                        <div class="col s2 raiseAmountWrapper disabledInput">
                                                            <label class="cedr-darkgray-font" for="raiseAmount" class="cedr-darkgray-font">Raise Amount</label>
                                                            <input type="text" id="raiseAmount" value="<? echo number_format($raiseamount[$i],2); ?>" disabled>
                                                        </div>
                                                        <div class="col s3 differential disabledInput" style="margin-left: 0px !important;">
                                                            <label class="cedr-darkgray-font" for="diffRate">Alternate Rate</label>
                                                            <input type="text" value="<? echo $diffrate[$i]; ?>" id="diffRate" disabled>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

    <? } } ?>
                                            </div>
                                        </div>
                                    </div>

                                    <!---bnifit &permission section-->
                                    <div class="benes clearfix">
                                    <h4><i class="fa fa-briefcase"></i>Benefits <span class="beneButton" id="modalInsuranceTrigger"></span>
                                        <div class="info-box profile5-part profile5-icon">
                                                <i class="fa fa-question-circle"></i>
                                                 <div class="info">
                                                    <b>HINT:</b>
                                                    <span>You do not have permission to edit this information. Please contact your admin.</span>
                                                 </div>
                                             </div>
                                     </h4>

                                    <? if (($brb1 < 1) && ($brb2 < 1) && ($brb3 < 1) && ($brb4 < 1) && ($brb5 < 1) && ($brb6 < 1) && ($brb7 < 1) && ($brb8 < 1) && ($brb9 < 1) && ($brb10 < 1)) $hide = 1; else $hide =0; ?>
                                        
                                        <div class='schebang <? if ($hide == 0) echo "hide"; ?>'>Nothing to see here</div>

                                        <div class="col s6 predetermined noLeftPad <? if ($hide == 1) echo "hide"; ?>">
                                            <div class="preWrapper">
                                                <div class="beneItem <? if ($brb1 < 1) echo 'hidden'; ?>" id="beneOne">
                                                <input name="eehi" type="hidden" value=-1 />
                                                <input type="hidden" id="brb1" name="brb1" value=<? echo $brb1; ?>>
                                                <span class="cedr-blue-font beneTitle">Health Insurance</span>
                                                <p>
                                                    <input <? if ($eehi == 1) echo 'checked'; ?> id="HiYes" name="eehi" type="radio" value=1 checked />
                                                    <label for="HiYes">Yes</label>
                                                </p>
                                                <p>
                                                    <input <? if ($eehi == 0) echo 'checked'; ?> id="HiNo" name="eehi" type="radio" value=0 />
                                                    <label for="HiNo">No</label>
                                                </p>
                                                </div>
                                                <div class="beneItem <? if ($brb2 < 1) echo 'hidden'; ?>" id="beneTwo">
                                                    <input name="eedi" type="hidden" value=-1 />
                                                    <input type="hidden" id="brb2" name="brb2" value=<? echo $brb2; ?>>
                                                    <span class="cedr-blue-font beneTitle">Dental Insurance</span>
                                                    <p>
                                                        <input <? if ($eedi == 1) echo 'checked'; ?> id="DiYes" name="eedi" type="radio" value=1 checked  />
                                                        <label for="DiYes">Yes</label>
                                                    </p>
                                                    <p>
                                                        <input <? if ($eedi == 0) echo 'checked'; ?> id="DiNo" name="eedi" type="radio" value=0 />
                                                        <label for="DiNo">No</label>
                                                    </p>
                                                </div>
                                                <div class="beneItem <? if ($brb3 < 1) echo 'hidden'; ?>" id="beneThree">
                                                    <input name="eevi" type="hidden" value=-1 />
                                                    <input type="hidden" id="brb3" name="brb3" value=<? echo $brb3; ?>>
                                                    <span class="cedr-blue-font beneTitle">Vision Insurance</span>
                                                    <p>
                                                        <input <? if ($eevi == 1) echo 'checked'; ?> id="ViYes" name="eevi" type="radio"  value=1 checked  />
                                                        <label for="ViYes">Yes</label>
                                                    </p>
                                                    <p>
                                                        <input <? if ($eevi == 0) echo 'checked'; ?> id="ViNo" name="eevi" type="radio" value=0 />
                                                        <label for="ViNo">No</label>
                                                    </p>
                                                </div>
                                                <div class="beneItem <? if ($brb4 < 1) echo 'hidden'; ?>" id="beneFour">
                                                    <input name="eeki" type="hidden" value=-1 />
                                                    <input type="hidden" id="brb4" name="brb4" value=<? echo $brb4; ?>>
                                                    <span class="cedr-blue-font beneTitle">401k</span>
                                                    <p>
                                                        <input <? if ($eeki == 1) echo 'checked'; ?> id="401KYes" name="eeki" type="radio" value=1 checked  />
                                                        <label for="401KYes">Yes</label>
                                                    </p>
                                                    <p>
                                                        <input <? if ($eeki == 0) echo 'checked'; ?> id="401KNo" name="eeki" type="radio" value=0 />
                                                        <label for="401KNo">No</label>
                                                    </p>
                                                </div>
                                                <div class="beneItem <? if ($brb5 < 1) echo 'hidden'; ?>" id="beneFive">
                                                    <input name="eefi" type="hidden" value=-1 />
                                                    <input type="hidden" id="brb5" name="brb5" value=<? echo $brb5; ?>>
                                                    <span class="cedr-blue-font beneTitle">Flex Spending Account</span>
                                                    <p>
                                                        <input <? if ($eefi == 1) echo 'checked'; ?> id="flexAccYes" name="eefi" type="radio" value=1 checked  />
                                                        <label for="flexAccYes">Yes</label>
                                                    </p>
                                                    <p>
                                                        <input <? if ($eefi == 0) echo 'checked'; ?> id="flexAccNo" name="eefi" type="radio" value=0 />
                                                        <label for="flexAccNo">No</label>
                                                    </p>
                                                </div>
                                                <div class="beneItem <? if (($brb6 < 1) or ($brb1 + $brb2 + $brb3 + $brb4 + $brb5 >= 5)) echo 'hidden'; ?>" id="beneSix">
                                                    <input name="eeaix" type="hidden" value=-1 />
                                             
                                                    <span class="cedr-blue-font beneTitle">Aflac</span>
                                                    <p>
                                                        <input <? if ($eeai == 1) echo 'checked'; ?> id="AflYes" name="eeaix" type="radio" value=1 />
                                                        <label for="AflYes">Yes</label>
                                                    </p>
                                                    <p>
                                                        <input <? if ($eeai == 0) echo 'checked'; ?> id="AflNo" name="eeaix" type="radio" value=0 />
                                                        <label for="AflNo">No</label>
                                                    </p>
                                                </div>
                                                <div class="beneItem <? if (($brb7 < 1) or ($brb1 + $brb2 + $brb3 + $brb4 + $brb5  + $brb6 >= 5)) echo 'hidden'; ?>" id="beneSeven">
                                                    <input name="eeo1x" type="hidden" value=-1 />
                                                    
                                                    <span class="cedr-blue-font beneTitle"><? echo $other0label; ?></span>
                                                    <p>
                                                        <input <? if ($eeo1 == 1) echo 'checked'; ?> id="other1Yes" name="eeo1x" type="radio " value=1  checked  />
                                                        <label for="other1Yes">Yes</label>
                                                    </p>
                                                    <p>
                                                        <input <? if ($eeo1 == 0) echo 'checked'; ?> id="other1No" name="eeo1x" type="radio" value=0 />
                                                        <label for="other1No">No</label>
                                                    </p>
                                                </div>
                                                <div class="beneItem <? if (($brb8 < 1) or ($brb1 + $brb2 + $brb3 + $brb4 + $brb5  + $brb6 + $brb7 >= 5)) echo 'hidden'; ?>" id="beneEight">
                                                    <input name="eeo2x" type="hidden" value=-1 />
                                                    
                                                    <span class="cedr-blue-font beneTitle"><? echo $other1label; ?></span>
                                                    <p>
                                                        <input <? if ($eeo2 == 1) echo 'checked'; ?> id="other2Yes" name="eeo2x" type="radio" value=1 checked  />
                                                        <label for="other2Yes">Yes</label>
                                                    </p>
                                                    <p>
                                                        <input <? if ($eeo2 == 0) echo 'checked'; ?> id="other2No" name="eeo2x" type="radio" value=0 />
                                                        <label for="other2No">No</label>
                                                    </p>
                                                </div>
                                                <div class="beneItem <? if (($brb9 < 1) or ($brb1 + $brb2 + $brb3 + $brb4 + $brb5  + $brb6 + $brb7 + $brb8 >= 5)) echo 'hidden'; ?>" id="beneNine">
                                                    <input name="eeo3x" type="hidden" value=-1 />
                                                   
                                                    <span class="cedr-blue-font beneTitle"><? echo $other2label; ?></span>
                                                    <p>
                                                        <input <? if ($eeo3 == 1) echo 'checked'; ?> id="other3Yes" name="eeo3x" type="radio" value=1 checked  />
                                                        <label for="other3Yes">Yes</label>
                                                    </p>
                                                    <p>
                                                        <input <? if ($eeo3 == 0) echo 'checked'; ?> id="other3No" name="eeo3x" type="radio" value=0 />
                                                        <label for="other3No">No</label>
                                                    </p>
                                                </div>
                                                <div class="beneItem <? if (($brb10 < 1) or ($brb1 + $brb2 + $brb3 + $brb4 + $brb5  + $brb6 + $brb7 + $brb8 + $brb9 >= 5)) echo 'hidden'; ?>" id="beneTen">
                                                    <input name="eeo4x" type="hidden" value=-1 />
                                                    
                                                    <span class="cedr-blue-font beneTitle"><? echo $other3label; ?></span>
                                                    <p>
                                                        <input <? if ($eeo4 == 1) echo 'checked'; ?> id="other4Yes" name="eeo4x" type="radio" value=1 checked  />
                                                        <label for="other4Yes">Yes</label>
                                                    </p>
                                                    <p>
                                                        <input <? if ($eeo4 == 0) echo 'checked'; ?> id="other4No" name="eeo4x" type="radio" value=0 />
                                                        <label for="other4No">No</label>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="vertDivider"></div>
                                        </div>

                                        <div class="col s6 addedInsurance noLeftPad <? if ($hide == 1) echo "hide"; ?>">
                                           <div class="beneItem <? if (($brb6 < 1) or ($brb1 + $brb2 + $brb3 + $brb4 + $brb5 < 5)) echo 'hidden'; ?>" id="beneSix">
                                                <input name="eeai" type="hidden" value=-1 />
                                                <input type="hidden" id="brb6" name="brb6" value=<? echo $brb6; ?>>
                                                <span class="cedr-blue-font beneTitle">Aflac</span>
                                                <p>
                                                    <input <? if ($eeai== 1) echo 'checked'; ?> id="rightAflYes" name="eeai" type="radio" value=1 />
                                                    <label for="rightAflYes">Yes</label>
                                                </p>
                                                <p>
                                                    <input <? if ($eeai == 0) echo 'checked'; ?> id="rightAflNo" name="eeai" type="radio" value=0 />
                                                    <label for="rightAflNo">No</label>
                                                </p>
                                            </div>
                                            <div class="beneItem <? if (($brb7 < 1) or ($brb1 + $brb2 + $brb3 + $brb4 + $brb5  + $brb6 < 5)) echo 'hidden'; ?>" id="beneSeven">
                                                <input name="eeo1" type="hidden" value=-1 />
                                                <input type="hidden" id="brb7" name="brb7" value=<? echo $brb7; ?>>
                                                <input type="hidden" id="other0label" name="other0label" value="<? echo $other0label; ?>"> 
                                                <span class="cedr-blue-font beneTitle"><? echo $other0label; ?></span>
                                                <p>                                               
                                                 <input <? if ($eeo1 == 1) echo 'checked'; ?> id="rightOther1Yes" name="eeo1" type="radio" value=1  />
                                                    <label for="rightOther1Yes">Yes</label>
                                                </p>
                                                <p>
                                                    <input <? if ($eeo1 == 0) echo 'checked'; ?> id="rightOther1No" name="eeo1" type="radio" value=0 />
                                                    <label for="rightOther1No">No</label>
                                                </p>
                                            </div>
                                            <div class="beneItem <? if (($brb8 < 1) or ($brb1 + $brb2 + $brb3 + $brb4 + $brb5  + $brb6 + $brb7 < 5)) echo 'hidden'; ?>" id="beneEight">
                                                <input name="eeo2" type="hidden" value=-1 />
                                                <input type="hidden" id="brb8" name="brb8" value=<? echo $brb8; ?>>
                                                <input type="hidden" id="other1label" name="other1label" value="<? echo $other1label; ?>"> 
                                                <span class="cedr-blue-font beneTitle"><? echo $other1label; ?></span>
                                                <p>
                                                    <input <? if ($eeo2 == 1) echo 'checked'; ?> id="rightOther2Yes" name="eeo2" type="radio" value=1 />
                                                    <label for="rightOther2Yes">Yes</label>
                                                </p>
                                                <p>
                                                    <input <? if ($eeo2 == 0) echo 'checked'; ?> id="rightOther2No" name="eeo2" type="radio" value=0 />
                                                    <label for="rightOther2No">No</label>
                                                </p>
                                            </div>
                                            <div class="beneItem <? if (($brb9 < 1) or ($brb1 + $brb2 + $brb3 + $brb4 + $brb5  + $brb6 + $brb7 + $brb8 < 5)) echo 'hidden'; ?>" id="beneNine">
                                                <input name="eeo3" type="hidden" value=-1 />
                                                <input type="hidden" id="brb9" name="brb9" value=<? echo $brb9; ?>>
                                                <input type="hidden" id="other2label" name="other2label" value="<? echo $other2label; ?>"> 
                                                <span class="cedr-blue-font beneTitle"><? echo $other2label; ?></span>
                                                <p>
                                                    <input <? if ($eeo3 == 1) echo 'checked'; ?> id="rightOther3Yes" name="eeo3" type="radio" value=1 />
                                                    <label for="rightOther3Yes">Yes</label>
                                                </p>
                                                <p>
                                                    <input <? if ($eeo3 == 0) echo 'checked'; ?> id="rightOther3No" name="eeo3" type="radio" value=0 />
                                                    <label for="rightOther3No">No</label>
                                                </p>
                                            </div>
                                            <div class="beneItem <? if (($brb10 < 1) or ($brb1 + $brb2 + $brb3 + $brb4 + $brb5  + $brb6 + $brb7 + $brb8 + $brb9 < 5)) echo 'hidden'; ?>" id="beneTen">
                                                <input name="eeo4" type="hidden" value=-1 />
                                                <input type="hidden" id="brb10" name="brb10" value=<? echo $brb10; ?>>
                                                <input type="hidden" id="other3label" name="other3label" value="<? echo $other3label; ?>"> 
                                                <span class="cedr-blue-font beneTitle"><? echo $other3label; ?></span>
                                                <p>
                                                    <input <? if ($eeo4 == 1) echo 'checked'; ?> id="rightOther4Yes" name="eeo4" type="radio" value=1 />
                                                    <label for="rightOther4Yes">Yes</label>
                                                </p>
                                                <p>
                                                    <input <? if ($eeo4 == 0) echo 'checked'; ?> id="rightOther4No" name="eeo4" type="radio" value=0 />
                                                    <label for="rightOther4No">No</label>
                                            </p>
                                             </div>
                                        <div class="vertDivider"></div>
                                    </div>
                                </div>
                                <!-- permissions-section desktop-->                            
                                <div class="benes permissions-section clearfix for_desktop employee_1">
                                    <h4><i class="fa fa-lock"></i>Permissions* <span class="beneButton" id="employee_modal"></span>
                                        <div class="info-box profile5-part profile5-icon">
                                            <i class="fa fa-question-circle"></i>
                                             <div class="info">
                                                <b>HINT:</b>
                                                <span>You do not have permission to edit this information. Please contact your admin.</span>
                                             </div>
                                         </div>
                                     </h4>
                                    <div class="col s2 l-20 employee_level">
                                        <b class="cedr-blue-font">Level</b>
                                        <p>Employee</p>
                                    </div>
                                    <div class="col s4 who_can_see_section">
                                        <h3 class="cedr-blue-font beneTitle">Who can see this employee?</h3>
                                        <div class="who_can_see_owner">
                                            <div class="col s6">
                                            <b class="cedr-blue-font">Owner</b>
                                            <p>Phillip Pitteroff</p>
                                            </div>
                                            <div class="col s6">
                                            <div class="records-checkbox">
                                            <label>Records</label>
                                            <input id="Records22" name="eedi2" type="checkbox" value="1" checked="" disabled="">
                                            <label for="Records22"></label>             
                                            </div>
                                            <div class="pay-checkbox">
                                            <label>Pay</label>
                                            <input id="Pay22" name="eedi2" type="checkbox" value="1" checked="" disabled="">
                                            <label for="Pay22"></label>                                       
                                            </div>
                                            </div>
                                        </div>
                                       <!--  <div class="horzDivider w90"></div>
                                        <div class="who_can_see_admin">
                                            <div class="col s6 left-side">
                                                <b class="cedr-blue-font">Admin(s)</b>
                                                <p>Ronald Gallo</p>
                                            </div>
                                            <div class="col s6 right-side">
                                                <div class="records-checkbox">
                                                <label>Records</label>
                                                <input id="Records33" name="eedi2" type="checkbox" value="1" disabled="" checked>
                                                <label for="Records33"></label>             
                                                </div>
                                                <div class="pay-checkbox">
                                                <label>Pay</label>
                                                <input id="Pay33" name="eedi2" type="checkbox" value="1" disabled="">
                                                <label for="Pay33"></label>                                       
                                                </div>
                                            </div>
                                            <div class="col s6 left-side">
                                             <p>Shannon Walters</p>
                                            </div>
                                            <div class="col s6 right-side">
                                                <div class="records-checkbox">
                                                <input id="Records33" name="eedi2" type="checkbox" value="1" checked="" disabled="">
                                                <label for="Records33"></label>             
                                                </div>
                                                <div class="pay-checkbox">
                                                <input id="Pay33" name="eedi2" type="checkbox" value="1" disabled="" checked>
                                                <label for="Pay33"></label>                                       
                                                </div>
                                            </div>
                                        </div>
                                        <div class="horzDivider w90"></div>
                                        <div class="who_can_see_manager">
                                            <div class="col s6 left-side">
                                                <b class="cedr-blue-font">Manager(s)</b>
                                                <p>Burdett Anna</p>
                                            </div>
                                            <div class="col s6 right-side">
                                                <div class="records-checkbox">
                                                <label>Records</label>
                                                <input id="Records33" name="eedi2" type="checkbox" value="1" disabled="" checked>
                                                <label for="Records33"></label>             
                                                </div>
                                                <div class="pay-checkbox">
                                                <label>Pay</label>
                                                <input id="Pay33" name="eedi2" type="checkbox" value="1" disabled="">
                                                <label for="Pay33"></label>                                       
                                                </div>
                                            </div>
                                            <div class="col s6 left-side">
                                             <p>Ownes Marvin</p>
                                            </div>
                                            <div class="col s6 right-side">
                                                <div class="records-checkbox">
                                                <input id="Records33" name="eedi2" type="checkbox" value="1" checked="" disabled="">
                                                <label for="Records33"></label>             
                                                </div>
                                                <div class="pay-checkbox">
                                                <input id="Pay33" name="eedi2" type="checkbox" value="1" disabled="" checked>
                                                <label for="Pay33"></label>                                       
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="col s4 more-permission" style="display: none;">
                                        <!-- <h3 class="cedr-blue-font beneTitle">Who can this employee see?</h3>
                                        <div class="col s6">
                                            <b class="cedr-blue-font">Admin(s)</b>
                                            <p>Vicki Mills</p>
                                        </div>
                                        <div class="col s6">
                                            <div class="records-checkbox">
                                                <label>Records</label>
                                                <input id="Records" name="eedi" type="checkbox" value="1" checked="" disabled="">
                                                <label for="Records"></label>             
                                            </div>
                                            <div class="pay-checkbox">
                                                <label>Pay</label>
                                                <input id="Pay" name="eedi" type="checkbox" value="1" checked="" disabled="">
                                                <label for="Pay"></label>                                       
                                            </div>
                                        </div>
                                        <div class="horzDivider w90"></div>
                                        <div class="col s6">
                                            <b class="cedr-blue-font">Manager(s)</b>
                                            <p>Anna Burdett</p>
                                        </div>
                                        <div class="col s6">
                                            <div class="records-checkbox">
                                                <label>Records</label>
                                                <input id="Records" name="eedi" type="checkbox" value="1" checked="" disabled="">
                                                <label for="Records"></label>             
                                            </div>
                                            <div class="pay-checkbox">
                                                <label>Pay</label>
                                                <input id="Pay" name="eedi" type="checkbox" value="1" checked="" disabled="">
                                                <label for="Pay"></label>                                       
                                            </div>
                                        </div>
                                        <div class="col s6">
                                            <b class="cedr-blue-font"></b>
                                            <p> Marvin Owens</p>
                                        </div>
                                        <div class="col s6">
                                            <div class="records-checkbox">
                                                <input id="Records" name="eedi" type="checkbox" value="1" checked="" disabled="">
                                                <label for="Records"></label>             
                                            </div>
                                            <div class="pay-checkbox">
                                                <input id="Pay" name="eedi" type="checkbox" value="1" checked="" disabled="">
                                                <label for="Pay"></label>                                       
                                            </div>
                                        </div>
                                        <div class="horzDivider w90"></div>
                                        <div class="col s6">
                                            <b class="cedr-blue-font">Employee(s)</b>
                                            <p>Maria Carraleno</p>
                                        </div>
                                        <div class="col s6">
                                            <div class="records-checkbox">
                                                <label>Records</label>
                                                <input id="Records" name="eedi" type="checkbox" value="1" checked="" disabled="">
                                                <label for="Records"></label>             
                                            </div>
                                            <div class="pay-checkbox">
                                                <label>Pay</label>
                                                <input id="Pay" name="eedi" type="checkbox" value="1" checked="" disabled="">
                                                <label for="Pay"></label>                                       
                                            </div>
                                        </div>
                                        <div class="col s6">
                                            <b class="cedr-blue-font"></b>
                                            <p>Michael Hart</p>
                                        </div>
                                        <div class="col s6">
                                            <div class="records-checkbox">
                                                <input id="Records" name="eedi" type="checkbox" value="1" checked="" disabled="">
                                                <label for="Records"></label>             
                                            </div>
                                            <div class="pay-checkbox">
                                                <input id="Pay" name="eedi" type="checkbox" value="1" checked="" disabled="">
                                                <label for="Pay"></label>                                       
                                            </div>
                                        </div>
                                        <div class="col s6">
                                            <b class="cedr-blue-font"></b>
                                            <p>Katherine Howard</p>
                                        </div>
                                        <div class="col s6">
                                            <div class="records-checkbox">
                                                <input id="Records" name="eedi" type="checkbox" value="1" checked="" disabled="">
                                                <label for="Records"></label>             
                                            </div>
                                            <div class="pay-checkbox">
                                                <input id="Pay" name="eedi" type="checkbox" value="1" checked="" disabled="">
                                                <label for="Pay"></label>                                       
                                            </div>
                                        </div>
                                        <div class="col s6">
                                            <b class="cedr-blue-font"></b>
                                            <p>Vicki Mills</p>
                                        </div>
                                        <div class="col s6">
                                            <div class="records-checkbox">
                                                <input id="Records" name="eedi" type="checkbox" value="1" checked="" disabled="">
                                                <label for="Records"></label>             
                                            </div>
                                            <div class="pay-checkbox">
                                                <input id="Pay" name="eedi" type="checkbox" value="1" checked="" disabled="">
                                                <label for="Pay"></label>                                       
                                            </div>
                                        </div>
                                        <div class="col s6">
                                            <b class="cedr-blue-font"></b>
                                            <p>Dolores Welch</p>
                                        </div>
                                        <div class="col s6">
                                            <div class="records-checkbox">
                                                <input id="Records" name="eedi" type="checkbox" value="1" checked="" disabled="">
                                                <label for="Records"></label>             
                                            </div>
                                            <div class="pay-checkbox">
                                                <input id="Pay" name="eedi" type="checkbox" value="1" checked="" disabled="">
                                                <label for="Pay"></label>                                       
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                                     <!---End bnifit &permission section-->

    <? } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#post-35458" class="orangeButton for_mobile">View Advanced</a>
                    </div>
                  
                
            </div>

              <? if ($mylevelcheck > 1) $target='efolders'; else $target='empfolder'; ?>
                  <div class="controlWrapper clearfix addEmployeeControls eeBelow">
                      <a href="#cancel_modal" type="submit" name="buttonchoice" class="cancelButton cedr-darkgray-font cancel_modal_btn">Cancel</a> <span class="orSpan">or</span>
                      <button style="margin-right:0" onclick="return valthis();" class="orangeButton add_employee_btn" onclick='window.location.href="https://www.cedrsolutions.com/membership/sandbox4/efolders/)"'></i>Save</button>
                  </div>
             
        </div>

       
    </form>

    <? } ?>
    <!--===================== /old permision modals & warning modals =====================-->
    <!-- insuranceModal2 Modal -->
    <!-- <div id="insuranceModal2" class="modal masterModal permissionModal">
        <form id="" name="" method="post" action="#">
            <div class="modal-content">
                <h4><i class="fa fa-lock"></i> Permissions </h4>
                <p class="p1 cedr-darkgray-font center">Please enter this employee’s Base Camp level.</p>
                <div class="horzDivider"></div>
                <label>Level*</label>
                <select class="browser-default">
                    <option value="Admin">Admin</option>
                </select>
                <div class="controlWrapper">   
                    
                    <div class="indicators">
                       <span class="active"></span>
                       <span></span>
                    </div>
                
                    <button onclick="event.preventDefault()" class="orangeButton modal-close">Next</button>
                    <span class="orSpan">or</span>
                    <a href="javascript:void(0);" type="submit" name="buttonchoice" class="cancelButton cedr-darkgray-font modal-close">Cancel</a>
                </div>
            </div>
        </form>
    </div>   -->       
    <!-- /insuranceModal2 Modal -->

    <!-- warning Modal -->
    <!-- <div id="warningModal" class="modal masterModal warningModal">
        <form id="" name="" method="post" action="#">
            <div class="modal-content">
                <h4>WARNING! You are changing a user’s level.</h4>
                <p class="p1 cedr-darkgray-font center">When a user’s level is changed, all of their permissions are reset.</p>
                <div class="controlWrapper">  
                    <button onclick="event.preventDefault()" class="orangeButton modal-close">Continue</button>
                    <span class="orSpan">or</span>
                    <a href="javascript:void(0);" type="submit" name="buttonchoice" class="cancelButton cedr-darkgray-font modal-close">Cancel</a>
                </div>
            </div>
        </form>
    </div> -->
    <!-- /warning Modal -->
    <!-- permission Apply Modal -->
    <!-- <div id="permissionApplyModal" class="modal masterModal permissionApplyModal">
            <form id="" name="" method="post" action="#">
                <div class="modal-content">
                    <h4><i class="fa fa-lock"></i> Permissions </h4>
                    <p class="p1 cedr-darkgray-font center">Select all that apply.</p>
                    <div class="horzDivider"></div>
                    
                    <div class="col s2 pl0">
                        <ul class="tabs tabs-fixed-width">
                            <li class="tab"><a class="active" href="#owner">Owner</a></li>
                            <li class="tab"><a href="#admin">Admin(s)</a></li>
                            <li class="tab"><a href="#manager">Manager(s)</a></li>
                        <div class="indicator"></div></ul>
                    </div>
                    <div class="col s10">
                      
                        <div id="owner" class="active">
                            <h3>Who can see this employee?</h3>                        
                            <div class="right">
                                <div class="records-checkbox">
                                    <label>Records</label>
                                </div>
                                <div class="pay-checkbox">
                                    <label>Pay</label>                    
                                </div>
                            </div>
                            <div class="horzDivider mt5"></div>
                            <div class="clearfix"></div>
                            <div class="name-info">
                                <p>Pitteroff, Phillip</p>
                                <div class="right">
                                    <div class="records-checkbox">
                                        <input id="nameRecords" name="eedi" type="checkbox" value="1" checked="" disabled="">
                                        <label for="nameRecords"></label>             
                                    </div>
                                    <div class="pay-checkbox">
                                        <input id="namepay" name="eedi" type="checkbox" value="1" checked="" disabled="">
                                        <label for="namepay"></label>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="admin" class="main-parent">
                            <h3>Who can see this employee?</h3>
                            <div class="right">
                                <div class="records-checkbox">
                                    <label>Records</label>
                                </div>
                                <div class="pay-checkbox">
                                    <label>Pay</label>                    
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="name-info select-border">
                                <p>SELECT ALL</p>
                                <div class="right">
                                    <div class="records-checkbox blue-bg">
                                        <input id="nameRecords1" name="eedi" type="checkbox" value="1" checked="" class="main-checkbox sub-checkbox2">
                                        <label for="nameRecords1"></label>             
                                    </div>
                                    <div class="pay-checkbox blue-bg">
                                        <input id="namepay1" name="eedi" type="checkbox" value="1" checked="" class="main-checkbox2">
                                        <label for="namepay1"></label>                                       
                                    </div>
                                </div>
                            </div>
                            <div class="name-info">
                                <p>Gallo, Ronald</p>
                                <div class="right">
                                    <div class="records-checkbox blue-bg">
                                        <input id="nameRecords1-2" name="eedi" type="checkbox" value="1" checked="" class="sub-checkbox sub-checkbox2">
                                        <label for="nameRecords1-2"></label>             
                                    </div>
                                    <div class="pay-checkbox blue-bg">
                                        <input id="namepay1-2" name="eedi" type="checkbox" value="1" checked="" class="sub-checkbox2">
                                        <label for="namepay1-2"></label>                                       
                                    </div>
                                </div>
                            </div>
                            <div class="name-info">
                                <p>Walters, Shannon</p>
                                <div class="right">
                                    <div class="records-checkbox blue-bg">
                                        <input id="nameRecords1-3" name="eedi" type="checkbox" value="1" checked="" class="sub-checkbox sub-checkbox2">
                                        <label for="nameRecords1-3"></label>             
                                    </div>
                                    <div class="pay-checkbox blue-bg">
                                        <input id="namepay1-3" name="eedi" type="checkbox" value="1" checked="" class="sub-checkbox2">
                                        <label for="namepay1-3"></label>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="manager" class="main-parent">
                            <h3>Who can see this employee?</h3>
                            <div class="right">
                                <div class="records-checkbox">
                                    <label>Records</label>
                                </div>
                                <div class="pay-checkbox">
                                    <label>Pay</label>                    
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="name-info select-border">
                                <p>SELECT ALL</p>
                                <div class="right">
                                    <div class="records-checkbox blue-bg">
                                        <input id="nameRecords2" name="eedi" type="checkbox" class="main-checkbox sub-checkbox2">
                                        <label for="nameRecords2"></label>             
                                    </div>
                                    <div class="pay-checkbox blue-bg">
                                        <input id="namepay2" name="eedi" type="checkbox" class="main-checkbox2">
                                        <label for="namepay2"></label>                                       
                                    </div>
                                </div>
                            </div>
                            <div class="name-info">
                                <p>Burdett, Anna</p>
                                <div class="right">
                                    <div class="records-checkbox blue-bg">
                                        <input id="nameRecords2-2" name="eedi" type="checkbox" value="1" class="sub-checkbox sub-checkbox2">
                                        <label for="nameRecords2-2"></label>             
                                    </div>
                                    <div class="pay-checkbox blue-bg">
                                        <input id="namepay2-2" name="eedi" type="checkbox" value="1" class="sub-checkbox2">
                                        <label for="namepay2-2"></label>                                       
                                    </div>
                                </div>
                            </div>
                            <div class="name-info">
                                <p>Owens, Marvin</p>
                                <div class="right">
                                    <div class="records-checkbox blue-bg">
                                        <input id="nameRecords2-3" name="eedi" type="checkbox" value="1" class="sub-checkbox sub-checkbox2">
                                        <label for="nameRecords2-3"></label>             
                                    </div>
                                    <div class="pay-checkbox blue-bg">
                                        <input id="namepay2-3" name="eedi" type="checkbox" value="1" class="sub-checkbox2">
                                        <label for="namepay2-3"></label>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                                            
                    </div>
                    <div class="clearfix"></div>
                    <div class="controlWrapper">   
                       
                        <div class="indicators">
                           <span></span>
                           <span class="active"></span>                          
                        </div>
                        
                        <button onclick="event.preventDefault()" class="orangeButton modal-close">Done</button>
                        <a href="javascript:void(0);" class="cancelButton cedr-darkgray-font modal-close back-btn">Back</a>
                        <span class="orSpan">or</span>
                        <a href="javascript:void(0);" type="submit" name="buttonchoice" class="cancelButton cedr-darkgray-font modal-close">Cancel</a>
                    </div>
                  
                </div>
            </form>
    </div> -->
    <!-- /permission Apply Modal -->
    <!--===================== /old permision modals & warning modals =====================-->
    <!-- snackbar_modal -->
    <div class="snackbar_modal without_some_files">
          <p>
              <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit" id="checkmark" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4C12.76,4 13.5,4.11 14.2, 4.31L15.77,2.74C14.61,2.26 13.34,2 12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0, 0 22,12M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z"></path></svg>
               <span></span>
               <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeSmall" id="cross" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path></svg>
           </p>
    </div>
    <!-- /snackbar_modal -->

    <!-- cancel modal cover -->
    <div id="cutup_modal_cover">
        <div id="cancel_modal" class="custom_modal modal">
            <div class="modal-content">
                <h4>Are you sure you want to cancel?</h4>
                <p class="p1 cedr-darkgray-font center">Changes to Maria Carr's info have not been saved.</p>
                <div class="center">
                    <button class="waves-effect orangeButton waves-light modal-close">No</button>
                    <button class="waves-effect orangeButton waves-light" onclick='window.location.href="https://www.cedrsolutions.com/membership/sandbox4/efolders/)"'>Yes</button>
                </div>
            </div>
        </div> 
    </div> 
    <!-- /cancel modal cover -->

    <!-- ================== Implement permission modal into profiles - four_custom_insuranceModal2 ================== -->
    <div class="admin-modals" id="admin-modals">
        <!-- insuranceModal2 Modal -->
        <div id="four_custom_insuranceModal2" class="modal masterModal permissionModal">
            <form id="" name="" method="post" action="#">
                <div class="modal-content">
                    <h4><i class="fa fa-lock"></i> Permissions </h4>
                    <p class="p1 cedr-darkgray-font center">Please enter this employee’s Base Camp level.</p>
                    <div class="horzDivider"></div>
                    <label>Level*</label>
                    <select class="browser-default" id="roleLevelSelect">
                        <option value="button1_employee">Employee</option>
                        <option value="button1_manager">Manager</option> 
                        <option value="button1_admin">Admin</option>                                      
                    </select>
                    <!-- four_proxy-info -->
                   <div class="four_proxy-info">
                        <b>Is this your proxy? <i class="fa fa-question-circle"></i>
                            <div class="info">
                                <b>HINT:</b>
                                <span>You may assign one Admin to act as your proxy. This person will have all of the same permissions as you.<br><br>This person will not be able to see your information.</span>
                            </div>
                        </b>
                        <span>
                            <input id="proxy3" name="eehi" type="radio" class="proxy_checkbox custom_proxy_checkbox1" value="1">
                            <label for="proxy3">Yes</label>
                        </span>
                        <span>
                            <input id="proxy4" name="eehi" type="radio" class="proxy_checkbox custom_proxy_checkbox2" value="1">
                            <label for="proxy4">No</label>
                        </span>
                    </div>
                    <!-- /four_proxy-info -->
                    <div class="controlWrapper">   
                        <!-- indicators -->
                        <div class="indicators">
                           <span class="active"></span>
                           <span></span>
                           <span class="manager_level admin_level"></span>                       
                        </div>
                        <!-- /indicators -->
                        <button onclick="event.preventDefault()" id="employee_orangeButton" class="orangeButton modal-close">Next</button>
                        <button onclick="event.preventDefault()" id="orangeButton" class="orangeButton modal-close">Next</button>
                        <button onclick="event.preventDefault()" id="admin_four_proxy_orangeButton" class="orangeButton modal-close">Next</button>
                        <button onclick="event.preventDefault()" id="admin_four_proxy_no_orangeButton" class="orangeButton modal-close">Next</button>
                        <span class="orSpan">or</span>
                        <a href="javascript:void(0);" type="submit" name="buttonchoice" class="cancelButton cedr-darkgray-font modal-close">Cancel</a>
                    </div>
                </div>
            </form>
        </div>         
        <!-- /insuranceModal2 Modal -->

        <!-- warning Modal -->
        <div id="four_custom_warningModal" class="modal masterModal warningModal">
            <form id="" name="" method="post" action="#">
                <div class="modal-content">
                    <h4>WARNING! You are changing a user’s level.</h4>
                    <p class="p1 cedr-darkgray-font center">When a user’s level is changed, all of their permissions are reset.</p>
                    <div class="controlWrapper">  
                        <button onclick="event.preventDefault()" class="orangeButton modal-close">Continue</button>
                        <span class="orSpan">or</span>
                        <a href="javascript:void(0);" type="submit" name="buttonchoice" class="cancelButton cedr-darkgray-font modal-close">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
        <!-- /warning Modal -->    

        <!-- when Profile change warning Modal -->
        <div id="profile_change_custom_warningModal" class="modal masterModal warningModal">
            <form id="" name="" method="post" action="#">
                <div class="modal-content">
                    <h4>WARNING! You are changing a user’s level.</h4>
                    <p class="p1 cedr-darkgray-font center">When a user’s level is changed, all of their permissions are reset.</p>
                    <div class="controlWrapper">  
                        <button onclick="event.preventDefault()" class="orangeButton modal-close">Continue</button>
                        <span class="orSpan">or</span>
                        <a href="javascript:void(0);" type="submit" name="buttonchoice" class="cancelButton cedr-darkgray-font modal-close">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
        <!-- / when Profile change warning Modal -->  


        <!-- proxy-error Modal -->
        <div id="four_proxy_error_Modal" class="modal masterModal warningModal">
            <form id="" name="" method="post" action="#">
                <div class="modal-content">
                    <h4>You designated [Employee Name] as your proxy.</h4>
                    <p class="p1 cedr-darkgray-font center">This person will have all of the same permissions as you, but will not be able<br>to see your information.</p>
                    <div class="controlWrapper">  
                        <button onclick="event.preventDefault()" class="orangeButton modal-close">Continue</button>
                        <span class="orSpan">or</span>
                        <a href="javascript:void(0);" type="submit" name="buttonchoice" class="cancelButton cedr-darkgray-font modal-close">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
        <!-- /proxy-error Modal -->  

        <!-- 1) Vertical & Horizontal. Level not sticking for Admin/Admin Proxy, add Admin Proxy option.  https://www.screencast.com/t/pyE4X6jAqVu -->
        <!-- fourOption_proxy_error_Modal -->
        <div id="fourOption_proxy_error_Modal" class="modal masterModal warningModal">
            <form id="" name="" method="post" action="#">
                <div class="modal-content">
                    <h4>You designated [Employee Name] as your proxy.</h4>
                    <p class="p1 cedr-darkgray-font center">This person will have all of the same permissions as you, but will not be able<br>to see your information.</p>
                    <div class="controlWrapper">  
                        <button onclick="event.preventDefault()" class="orangeButton modal-close">Continue</button>
                        <span class="orSpan">or</span>
                        <a href="javascript:void(0);" type="submit" name="buttonchoice" class="cancelButton cedr-darkgray-font modal-close">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
        <!-- /fourOption_proxy_error_Modal --> 

        <!-- permission Apply Modal -->
        <div id="four_custom_permissionApplyModal" class="modal masterModal permissionApplyModal">
                <form id="" name="" method="post" action="#">
                    <div class="modal-content">
                        <h4><i class="fa fa-lock"></i> Permissions </h4>
                        <p class="p1 cedr-darkgray-font center">Select all that apply.</p>
                        <h3 class="only_mobile_owner_can_see">Who can see this employee?</h3> 
                        <div class="horzDivider"></div>
                        <!-- tabs -->
                        <div class="col s2 pl0">
                            <ul class="tabs tabs-fixed-width">
                                <li class="tab"><a class="active" href="#custom_owner">Owner</a></li>
                                <li class="tab"><a href="#custom_admin">Admin(s)</a></li>
                                <li class="tab manager_tab_btn"><a href="#custom_manager">Manager(s)</a></li>
                            </ul>
                        </div>
                        <div class="col s10" id="per_scroll">
                            <!-- owner -->
                            <div id="custom_owner" class="tabs-content active">
                                <h3 class="owner_can_see">Who can see this employee?</h3> 
                                <div class="o_left"><h3>Owner</h3></div>                         
                                <div class="right">
                                    <div class="records-checkbox">
                                        <label>Records</label>
                                    </div>
                                    <div class="pay-checkbox">
                                        <label>Pay</label>                    
                                    </div>
                                </div>
                                <div class="horzDivider mt5"></div>
                                <div class="clearfix"></div>  
                                <div class="name-info">
                                    <p>Pitteroff, Phillip</p>
                                    <div class="right">
                                        <div class="records-checkbox">
                                            <input id="custom_nameRecords" name="eedi" type="checkbox" value="1" checked="" disabled="">
                                            <label for="custom_nameRecords"></label>             
                                        </div>
                                        <div class="pay-checkbox">
                                            <input id="custom_namepay" name="eedi" type="checkbox" value="1" checked="" disabled="">
                                            <label for="custom_namepay"></label>                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /owner -->
                            <!-- admin -->
                            <div id="custom_admin" class="tabs-content main-parent" style="display: none;">
                                <h3 class="wo_can_see">Who can see this employee?</h3>
                                <div class="o_left"><h3>Admin(s)</h3></div>
                                <div class="right">
                                    <div class="records-checkbox">
                                        <label>Records</label>
                                    </div>
                                    <div class="pay-checkbox">
                                        <label>Pay</label>                    
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="name-info select-border">
                                    <p>SELECT ALL</p>
                                    <div class="right">
                                        <div class="records-checkbox blue-bg">
                                            <input id="custom_nameRecords1" name="eedi" type="checkbox" value="1" checked="" class="main-checkbox sub-checkbox2">
                                            <label for="custom_nameRecords1"></label>             
                                        </div>
                                        <div class="pay-checkbox blue-bg">
                                            <input id="custom_namepay1" name="eedi" type="checkbox" value="1" checked="" class="main-checkbox2 sub-checkbox2">
                                            <label for="custom_namepay1"></label>                                       
                                        </div>
                                    </div>
                                </div>
                                <div class="name-info">
                                    <p>Ronald Gallo</p>
                                    <div class="right">
                                        <div class="records-checkbox blue-bg">
                                            <input id="custom_nameRecords1-2" name="eedi" type="checkbox" value="1" checked="" class="sub-checkbox sub-checkbox2">
                                            <label for="custom_nameRecords1-2"></label>             
                                        </div>
                                        <div class="pay-checkbox blue-bg">
                                            <input id="custom_namepay1-2" name="eedi" type="checkbox" value="1" checked="" class="sub-checkbox2">
                                            <label for="custom_namepay1-2"></label>                                       
                                        </div>
                                    </div>
                                </div>
                                <div class="name-info">
                                    <p>Shannon Walters</p>
                                    <div class="right">
                                        <div class="records-checkbox blue-bg">
                                            <input id="custom_nameRecords1-3" name="eedi" type="checkbox" value="1" checked="" class="sub-checkbox sub-checkbox2">
                                            <label for="custom_nameRecords1-3"></label>             
                                        </div>
                                        <div class="pay-checkbox blue-bg">
                                            <input id="custom_namepay1-3" name="eedi" type="checkbox" value="1" checked="" class="sub-checkbox2">
                                            <label for="custom_namepay1-3"></label>                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /admin --> 
                            <!-- manager -->
                            <div id="custom_manager" class="main-parent tabs-content" style="display: none;">
                                <h3 class="wo_can_see">Who can see this employee?</h3>
                                <div class="o_left"><h3>Manager(s)</h3></div>
                                <div class="right">
                                    <div class="records-checkbox">
                                        <label>Records</label>
                                    </div>
                                    <div class="pay-checkbox">
                                        <label>Pay</label>                    
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="name-info select-border">
                                    <p>SELECT ALL</p>
                                    <div class="right">
                                        <div class="records-checkbox blue-bg">
                                            <input id="custom_nameRecords2" name="eedi" type="checkbox" class="main-checkbox sub-checkbox2">
                                            <label for="custom_nameRecords2"></label>            
                                        </div>
                                        <div class="pay-checkbox blue-bg">
                                            <input id="custom_namepay2" name="eedi" type="checkbox" class="main-checkbox2 sub-checkbox2">
                                            <label for="custom_namepay2"></label>                                       
                                        </div>
                                    </div>
                                </div>
                                <div class="name-info">
                                    <p>Burdett Anna</p>
                                    <div class="right">
                                        <div class="records-checkbox blue-bg">
                                            <input id="custom_nameRecords2-2" name="eedi" type="checkbox" value="1" class="sub-checkbox sub-checkbox2">
                                            <label for="custom_nameRecords2-2"></label>             
                                        </div>
                                        <div class="pay-checkbox blue-bg">
                                            <input id="custom_namepay2-2" name="eedi" type="checkbox" value="1" class="sub-checkbox2">
                                            <label for="custom_namepay2-2"></label>                                       
                                        </div>
                                    </div>
                                </div>
                                <div class="name-info">
                                    <p>Owens Marvin</p>
                                    <div class="right">
                                        <div class="records-checkbox blue-bg">
                                            <input id="custom_nameRecords2-3" name="eedi" type="checkbox" value="1" class="sub-checkbox sub-checkbox2">
                                            <label for="custom_nameRecords2-3"></label>             
                                        </div>
                                        <div class="pay-checkbox blue-bg">
                                            <input id="custom_namepay2-3" name="eedi" type="checkbox" value="1" class="sub-checkbox2">
                                            <label for="custom_namepay2-3"></label>                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /manager -->                    
                        </div>
                        <div class="clearfix"></div>
                        <div class="controlWrapper">   
                            <!-- indicators -->
                            <div class="indicators">
                               <span></span>
                               <span class="active"></span>  
                               <span class="manager_level admin_level"></span>                        
                            </div>
                            <!-- /indicators -->
                            <button onclick="event.preventDefault()" class="orangeButton modal-close permission-done-btn">Done</button>
                            <button onclick="event.preventDefault()" class="manager_level2 admin_level2 orangeButton modal-close">Next</button>
                            <a href="javascript:void(0);" class="cancelButton cedr-darkgray-font modal-close back-btn">Back</a>
                            <span class="orSpan">or</span>
                            <a href="javascript:void(0);" type="submit" name="buttonchoice" class="cancelButton cedr-darkgray-font modal-close">Cancel</a>
                        </div>
                       <!-- /tabs -->
                    </div>
                </form>
        </div>
        <!-- /permission Apply Modal -->

        <!-- last permission Apply Modal -->
        <div id="four_custom_lastpermissionApplyModal" class="modal masterModal permissionApplyModal">
                <form id="" name="" method="post" action="#">
                    <div class="modal-content">
                        <h4><i class="fa fa-lock"></i> Permissions </h4>
                        <p class="p1 cedr-darkgray-font center">Select all that apply.</p>
                        <h3 class="only_mobile_owner_can_see">Who can this employee see?</h3> 
                        <div class="horzDivider"></div>
                        <!-- tabs -->
                        <div class="col s2 pl0">
                            <ul class="tabs tabs-fixed-width">
                                <li class="tab"><a class="owner_tab_btn" href="#custom_owner2">Owner</a></li>
                                <li class="tab admin_tab_btn"><a class="" href="#custom_admin2">Admin(s)</a></li>
                                <li class="tab"><a class="active custom_scroll_manager" href="#custom_manager2">Manager(s)</a></li>
                                <li class="tab"><a class="custom_scroll" href="#custom_employees2">Employee(s)</a></li>
                            </ul>
                        </div>
                        <div class="col s10" id="pre_scoll1">
                            <!-- owner2 -->
                            <div id="custom_owner2" class="active">
                                <h3 class="owner_can_see">Who can this employee see?</h3> class="owner_can_see" 
                                <div class="o_left"><h3>Owner</h3></div>                           
                                <div class="right">
                                    <div class="records-checkbox">
                                        <label>Records</label>
                                    </div>
                                    <div class="pay-checkbox">
                                        <label>Pay</label>                    
                                    </div>
                                </div>
                                <div class="clearfix"></div>                            
                                <div class="name-info">
                                    <p>Pitteroff, Phillip</p>
                                    <div class="right">
                                        <div class="records-checkbox">
                                            <input id="custom_nameRecordsl1" name="eedi" type="checkbox" value="1" checked="" disabled="">
                                            <label for="custom_nameRecordsl1"></label>             
                                        </div>
                                        <div class="pay-checkbox">
                                            <input id="custom_namepayl1" name="eedi" type="checkbox" value="1" checked="" disabled="">
                                            <label for="custom_namepayl1"></label>                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /owner2 -->
                            <!-- admin2 -->
                            <div id="custom_admin2" class="main-parent active">
                                <h3 class="wo_can_see">Who can this employee see?</h3>  
                                <div class="o_left"><h3>Admin(s)</h3></div>                        
                                <div class="right">
                                    <div class="records-checkbox">
                                        <label>Records</label>
                                    </div>
                                    <div class="pay-checkbox">
                                        <label>Pay</label>                    
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="name-info select-border">
                                    <p>SELECT ALL</p>
                                    <div class="right">
                                        <div class="records-checkbox blue-bg">
                                            <input id="custom_nameRecordsl2" name="eedi" type="checkbox" value="1" class="main-checkbox sub-checkbox2">
                                            <label for="custom_nameRecordsl2"></label>             
                                        </div>
                                        <div class="pay-checkbox blue-bg">
                                            <input id="custom_namepayl2" name="eedi" type="checkbox" value="1" class="main-checkbox2 sub-checkbox2">
                                            <label for="custom_namepayl2"></label>                                       
                                        </div>
                                    </div>
                                </div>
                                <div class="name-info">
                                    <p>Gallo, Ronald</p>
                                    <div class="right">
                                        <div class="records-checkbox blue-bg">
                                            <input id="custom_nameRecordsl3" name="eedi" type="checkbox" value="1" class="sub-checkbox sub-checkbox2">
                                            <label for="custom_nameRecordsl3"></label>             
                                        </div>
                                        <div class="pay-checkbox blue-bg">
                                            <input id="custom_namepayl3" name="eedi" type="checkbox" value="1" class="sub-checkbox2">
                                            <label for="custom_namepayl3"></label>                                       
                                        </div>
                                    </div>
                                </div>
                                <div class="name-info">
                                    <p>Walters, Shannon</p>
                                    <div class="right">
                                        <div class="records-checkbox blue-bg">
                                            <input id="custom_nameRecordsl4" name="eedi" type="checkbox" value="1" class="sub-checkbox sub-checkbox2">
                                            <label for="custom_nameRecordsl4"></label>             
                                        </div>
                                        <div class="pay-checkbox blue-bg">
                                            <input id="custom_namepayl4" name="eedi" type="checkbox" value="1" class="sub-checkbox2">
                                            <label for="custom_namepayl4"></label>                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /admin2 -->
                            <!-- manager2 -->
                            <div id="custom_manager2" class="main-parent">
                                <h3 class="wo_can_see">Who can this employee see?</h3> 
                                <div class="o_left"><h3>Manager(s)</h3></div>                     
                                <div class="right">
                                    <div class="records-checkbox">
                                        <label>Records</label>
                                    </div>
                                    <div class="pay-checkbox">
                                        <label>Pay</label>                    
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="name-info select-border">
                                    <p>SELECT ALL</p>
                                    <div class="right">
                                        <div class="records-checkbox blue-bg">
                                            <input id="custom_nameRecordsl5" name="eedi" type="checkbox" value="1" class="main-checkbox sub-checkbox2">
                                            <label for="custom_nameRecordsl5"></label>             
                                        </div>
                                        <div class="pay-checkbox blue-bg">
                                            <input id="custom_namepayl5" name="eedi" type="checkbox" value="1" class="main-checkbox2 sub-checkbox2">
                                            <label for="custom_namepayl5"></label>                                       
                                        </div>
                                    </div>
                                </div>
                                <div class="name-info">
                                    <p>Burdett, Anna</p>
                                    <div class="right">
                                        <div class="records-checkbox blue-bg">
                                            <input id="custom_nameRecordsl6" name="eedi" type="checkbox" value="1" class="sub-checkbox sub-checkbox2">
                                            <label for="custom_nameRecordsl6"></label>             
                                        </div>
                                        <div class="pay-checkbox blue-bg">
                                            <input id="custom_namepayl6" name="eedi" type="checkbox" value="1" class="sub-checkbox2">
                                            <label for="custom_namepayl6"></label>                                       
                                        </div>
                                    </div>
                                </div>
                                <div class="name-info">
                                    <p>Owens, Marvin</p>
                                    <div class="right">
                                        <div class="records-checkbox blue-bg">
                                            <input id="custom_nameRecordsl7" name="eedi" type="checkbox" value="1" class="sub-checkbox sub-checkbox2">
                                            <label for="custom_nameRecordsl7"></label>             
                                        </div>
                                        <div class="pay-checkbox blue-bg">
                                            <input id="custom_namepayl7" name="eedi" type="checkbox" value="1" class="sub-checkbox2">
                                            <label for="custom_namepayl7"></label>                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /manager2 -->
                            <!-- employees2 -->
                            <div id="custom_employees2" class="main-parent">
                                <h3 class="wo_can_see">Who can this employee see?</h3>
                                <div class="o_left"><h3>Employee(s)</h3></div>    
                                <div class="right">
                                    <div class="records-checkbox">
                                        <label>Records</label>
                                    </div>
                                    <div class="pay-checkbox">
                                        <label>Pay</label>                    
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="name-info select-border">
                                    <p>SELECT ALL</p>
                                    <div class="right">
                                        <div class="records-checkbox blue-bg">
                                            <input id="custom_nameRecordsl8" name="eedi" type="checkbox" value="1" class="main-checkbox sub-checkbox2">
                                            <label for="custom_nameRecordsl8"></label>             
                                        </div>
                                        <div class="pay-checkbox blue-bg">
                                            <input id="custom_namepayl8" name="eedi" type="checkbox" value="1" class="main-checkbox2 sub-checkbox2">
                                            <label for="custom_namepayl8"></label>                                       
                                        </div>
                                    </div>
                                </div>
                                <!-- five rows show at one time -->
                                    <div class="name-info">
                                        <p>Caralenno, Maria</p>
                                        <div class="right">
                                            <div class="records-checkbox blue-bg">
                                                <input id="custom_nameRecordsl9" name="eedi" type="checkbox" value="1" class="sub-checkbox sub-checkbox2">
                                                <label for="custom_nameRecordsl9"></label>             
                                            </div>
                                            <div class="pay-checkbox blue-bg">
                                                <input id="custom_namepayl9" name="eedi" type="checkbox" value="1" class="sub-checkbox2">
                                                <label for="custom_namepayl9"></label>                                       
                                            </div>
                                        </div>
                                    </div>
                                    <div class="name-info">
                                        <p>Hart, Michael</p>
                                        <div class="right">
                                            <div class="records-checkbox blue-bg">
                                                <input id="custom_nameRecordsl10" name="eedi" type="checkbox" value="1" class="sub-checkbox sub-checkbox2">
                                                <label for="custom_nameRecordsl10"></label>             
                                            </div>
                                            <div class="pay-checkbox blue-bg">
                                                <input id="custom_namepayl10" name="eedi" type="checkbox" value="1" class="sub-checkbox2">
                                                <label for="custom_namepayl10"></label>                                       
                                            </div>
                                        </div>
                                    </div>
                                    <div class="name-info">
                                        <p>Howard, Katherine</p>
                                        <div class="right">
                                            <div class="records-checkbox blue-bg">
                                                <input id="custom_nameRecordsl11" name="eedi" type="checkbox" value="1" class="sub-checkbox sub-checkbox2">
                                                <label for="custom_nameRecordsl11"></label>             
                                            </div>
                                            <div class="pay-checkbox blue-bg">
                                                <input id="custom_namepayl11" name="eedi" type="checkbox" value="1" class="sub-checkbox2">
                                                <label for="custom_namepayl11"></label>                                       
                                            </div>
                                        </div>
                                    </div>
                                    <div class="name-info">
                                        <p>Mills, Vicki</p>
                                        <div class="right">
                                            <div class="records-checkbox blue-bg">
                                                <input id="custom_nameRecordsl_10" name="eedi" type="checkbox" value="1" class="sub-checkbox sub-checkbox2">
                                                <label for="custom_nameRecordsl_10"></label>             
                                            </div>
                                            <div class="pay-checkbox blue-bg">
                                                <input id="custom_namepayl_10" name="eedi" type="checkbox" value="1" class="sub-checkbox2">
                                                <label for="custom_namepayl_10"></label>                                       
                                            </div>
                                        </div>
                                    </div>
                                    <div class="name-info">
                                        <p>John, Doe</p>
                                        <div class="right">
                                            <div class="records-checkbox blue-bg">
                                                <input id="custom_nameRecordsl_11" name="eedi" type="checkbox" value="1" class="sub-checkbox sub-checkbox2">
                                                <label for="custom_nameRecordsl_11"></label>             
                                            </div>
                                            <div class="pay-checkbox blue-bg">
                                                <input id="custom_namepayl_11" name="eedi" type="checkbox" value="1" class="sub-checkbox2">
                                                <label for="custom_namepayl_11"></label>                                       
                                            </div>
                                        </div>
                                    </div>
                                
                                <!-- /five rows show at one time -->
                            </div>
                            <!-- /employees2 -->                     
                        </div>
                        <div class="clearfix"></div>
                        <div class="controlWrapper">   
                            <!-- indicators -->
                            <div class="indicators">
                               <span></span>
                               <span class="active"></span>  
                               <span class="manager_level active admin_level"></span>                        
                            </div>
                            <!-- /indicators -->
                            <button onclick="event.preventDefault()" class="orangeButton modal-close permission-done-btn">Done</button>
                            <a href="javascript:void(0);" class="cancelButton cedr-darkgray-font modal-close back-btn">Back</a>
                            <span class="orSpan">or</span>
                            <a href="javascript:void(0);" type="submit" name="buttonchoice" class="cancelButton cedr-darkgray-font modal-close">Cancel</a>
                        </div>
                       <!-- /tabs -->
                    </div>
                </form>
        </div>
        <!-- /permission Apply Modal -->
    </div>
    <!-- ================== /Implement permission modal into profiles - four_custom_insuranceModal2 ================== -->


    <!-- profile Modal -->
    <div id="profile7_btn" class="modal">
        <form id="" name="" method="post" action="#">
            <div class="modal-content">
                <div class="col s3">
                    <img src="https://www.cedrsolutions.com/membership/sandbox4/base_camp/images/anna-big.png'">
                </div>
                <div class="col s9 pl-30">
                    <h2>Anna Burdett</h2>
                    <b>SC Advisor / Solution Center</b>
                    <div class="clearfix"></div>
                    <div class="col s6 noLeftPad">
                        <label>Work Email</label>
                        <p>a.burdett@gmail.com</p>
                    </div>
                    <div class="col s6 noLeftPad">
                        <label>Cell Phone</label>
                        <p>(602) 476-1418</p>
                    </div>
                    <div class="col s6 noLeftPad">
                        <br>
                        <label>Emergency Contact</label>
                        <p>Ben Burdett<br>(520) 658-4458</p>
                    </div>                    
                </div>
                <div class="clearfix"></div>
                <div class="controlWrapper">  
                    <button onclick="event.preventDefault()" class="orangeButton modal-close">Done</button>
                </div>
            </div>
        </form>
    </div>

    <script>
    $(document).ready(function(){
        $('.modal').modal();
      });
         
    </script>
    <!-- /profile Modal -->
    <script>
    /*== proxy info scriupt ==*/
    $(document).ready(function(){ 
        
        
        function levelCheck(){
            var desig = localStorage.getItem('designation_level')

                switch(desig){
                case 'Admin_designation_level':
                        $('#designation_level').prop('selectedIndex',2);
                        $('#designation_level').closest('.hidden_fields').css('height','150px');
                        $('.fourOption_proxy_error_Modal_info .four_proxy-info').show();
                        break;
                case 'Employee_designation_level':
                        $('#designation_level').prop('selectedIndex',0);
                        break;
                case 'Manager_designation_level':
                        $('#designation_level').prop('selectedIndex',1);

                }
        }
        //snackbar-modal script
        $('body#post-35458 .add_employee_btn').click(function(){            
          $('.snackbar_modal span').empty();
          $('.snackbar_modal span').text('Your changes have been saved.');
          $('.snackbar_modal').show();
            setTimeout(function(){
              $('.snackbar_modal').fadeOut();
          }, 1000);      
        })
        /*== trash tab - successModal close ==*/
        $('.snackbar_modal svg#cross').click(function(){
           $('.snackbar_modal').fadeOut(); 
        });
        //cancel modal - add employee page
        $('#cancel_modal').modal({
            dismissible: true,
            startingTop: '20%',
            endingTop: '30%'
        });
        $('.cancel_modal_btn').on('click', function() {
            $('#cancel_modal').modal('open');   
        });

        /*============ profile 7 buton tabs ===========*/
        //profile 1 button
        $('body#post-35458 #profile1_btn').click(function () {   
               $('.profile2-part, .profile3-part, .profile5-part').fadeOut();
               $('body').removeClass('profile5_disables');
               $('.payRate .currentPayWrapper, .payRate .default_historyWrapper').removeClass('hide'); 
               //show default profile 1 & 2
               $('.profile1').fadeIn(); 
               //hide profile 8
               $('.profile8, .profile6').fadeOut();  
               //yes proxy
               $('body#post-35458 .permissions-section .employee_level p').removeClass('yes_proxy_text no_proxy_text');  

               //5) Vertical & Horizontal. Employee Profile #1: The Level should be set to Employee.
               $('body#post-35458 #designation_level').prop('selectedIndex',0);  

               //3) Vertical & Horizontal. Employee Profile #3: Take out the line at the bottom of this section.
               //4) Vertical & Horizontal. Employee Profile #4: Take out the line at the bottom of this section.
               $('.who_can_see_section .horzDivider').removeClass('white_horzDivider');

               //iPAD PRO
               //2) Horizontal.
               // Employee Profile #2: Make the space above Permissions match the spacing above Pay Archive.
               $('.twoColumnPayRate').removeClass('profile2_payArchive, profile8_payArchive') 

               //admin poroxy question on shoter view
               if($('body#post-35458 main .for_mobile.orangeButton').text()=="View Advanced") {
                   $('#designation_level').closest('.hidden_fields').css('height','110px');
                   
                   $('.fourOption_proxy_error_Modal_info .four_proxy-info').hide(); 
               }

        });  
        //profile 2 button   
        $('body#post-35458 #profile2_btn').click(function () {   
               $('.profile2-part').fadeIn();
               $('.profile3-part, .profile5-part').fadeOut();
               $('body').removeClass('profile5_disables');
               $('.payRate .currentPayWrapper, .payRate .default_historyWrapper').addClass('hide');
               //show default profile 1 & 2
               $('.profile1').fadeIn();  
               //hide profile 8
               $('.profile8, .profile6').fadeOut(); 
               //yes proxy
               $('body#post-35458 .permissions-section .employee_level p').removeClass('yes_proxy_text no_proxy_text'); 

               //6) Vertical & Horizontal. Employee Profile #2: The Level should be set to Employee.
               $('body#post-35458 #designation_level').prop('selectedIndex',0); 

               //3) Vertical & Horizontal. Employee Profile #3: Take out the line at the bottom of this section.
               //4) Vertical & Horizontal. Employee Profile #4: Take out the line at the bottom of this section.
               $('.who_can_see_section .horzDivider').removeClass('white_horzDivider');

               //iPAD PRO
               //2) Horizontal.
               // Employee Profile #2: Make the space above Permissions match the spacing above Pay Archive.
               $('.twoColumnPayRate').addClass('profile2_payArchive') 
               $('.twoColumnPayRate').removeClass('profile8_payArchive') 
               //admin poroxy question on shoter view
               if($('body#post-35458 main .for_mobile.orangeButton').text()=="View Advanced") {
                   $('#designation_level').closest('.hidden_fields').css('height','110px');
                   $('.fourOption_proxy_error_Modal_info .four_proxy-info').hide(); 
               } 

        });
        //profile 3 & 6 button
        $('body#post-35458 #profile3_btn, body#post-35458 #profile6_btn').click(function () {   
               $('.profile3-part').fadeIn();
               $('.profile2-part, .profile5-part').fadeOut();
               $('body').removeClass('profile5_disables');
               $('.payRate .currentPayWrapper, .payRate .default_historyWrapper').removeClass('hide');  
               //hide default profile 1 & 2 & 8
               $('.profile1, .profile8, .profile6').fadeOut(); 

               //iPAD PRO
               //2) Horizontal.
               // Employee Profile #2: Make the space above Permissions match the spacing above Pay Archive.
               $('.twoColumnPayRate').removeClass('profile2_payArchive, profile8_payArchive') 
        });
        //profile 6 button
        $('body#post-35458 #profile6_btn').click(function () {  
            //yes proxy
            $('body#post-35458 .permissions-section .employee_level p').addClass('yes_proxy_text'); 
            $('body#post-35458 .permissions-section .employee_level p').removeClass('no_proxy_text');

            //show default profile 6
            $('.profile6').fadeIn(); 

            $('.who_can_see_section, .more-permission').empty();
            //Who can see this employee?
            $('.who_can_see_section').html('<h3 class="cedr-blue-font beneTitle">Who can see this employee?</h3><div class="col s6"><b class="cedr-blue-font">Owner</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Pitteroff, Phillip</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div><div class="horzDivider w90"></div>');
            //Who can this employee see?    
            $('.more-permission').show();                   
            $('.more-permission').html('<h3 class="cedr-blue-font beneTitle">Who can this employee see?</h3><div class="col s6"><b class="cedr-blue-font">Admin(s)</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Gallo, Ronald</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Walters, Shannon</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div><div class="horzDivider w90"></div><div class="col s6"><b class="cedr-blue-font">Manager(s)</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Burdett, Anna</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Owens, Marvin</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div><div class="horzDivider w90"></div><div class="col s6"><b class="cedr-blue-font">Employee(s)</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Caralenno, Maria</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Hart, Michael</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Howard, Katherine</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div> <div class="col s6"><p>Mills, Vicki</p></div> <div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div> <div class="col s6"><p>John, Doe</p></div> <div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="horzDivider w90"></div>');

             //admin poroxy question on shoter view
             if($('body#post-35458 main .for_mobile.orangeButton').text()=="View Advanced") {
                $('#designation_level').closest('.hidden_fields').css('height','150px');
                $('.fourOption_proxy_error_Modal_info .four_proxy-info').show(); 
                 $('.fourOption_proxy_error_Modal_info #fourOption_proxy1').prop('checked',true);
            } 
        });
        //profile 4 button
        $('body#post-35458 #profile4_btn').click(function () {  
               $('.profile3-part, .profile2-part').fadeIn();
               $('.profile5-part').fadeOut();
               $('body').removeClass('profile5_disables');
               $('.payRate .currentPayWrapper, .payRate .default_historyWrapper').addClass('hide'); 
               //hide default profile 1 & 2 & 8
               $('.profile1, .profile8, .profile6').fadeOut();      

               //iPAD PRO
               //2) Horizontal.
               // Employee Profile #8: Make the section above Benefits the same size as the section above Permissions.
               $('.twoColumnPayRate').addClass('profile2_payArchive');                          
               $('.twoColumnPayRate').removeClass('profile8_payArchive');                          
        });

        //profile 3 & 4 Proxy no class
        $('body#post-35458 #profile3_btn, body#post-35458 #profile4_btn').click(function () {  
              //no proxy
              $('body#post-35458 .permissions-section .employee_level p').addClass('no_proxy_text'); 
              //yes proxy
              $('body#post-35458 .permissions-section .employee_level p').removeClass('yes_proxy_text');


            $('.who_can_see_section, .more-permission').empty();
            //Who can see this employee?
            $('.who_can_see_section').html('<h3 class="cedr-blue-font beneTitle">Who can see this employee?</h3><div class="col s6"><b class="cedr-blue-font">Owner</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Pitteroff, Phillip</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div><div class="horzDivider w90"></div>');
            //Who can this employee see?    
            $('.more-permission').show();                   
            $('.more-permission').html('<h3 class="cedr-blue-font beneTitle">Who can this employee see?</h3><div class="col s6"><b class="cedr-blue-font">Manager(s)</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Burdett, Anna</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Owens, Marvin</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div><div class="horzDivider w90"></div><div class="col s6"><b class="cedr-blue-font">Employee(s)</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Caralenno, Maria</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Hart, Michael</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Howard, Katherine</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div> <div class="col s6"><p>Mills, Vicki</p></div> <div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div> <div class="col s6"><p>John, Doe</p></div> <div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div> <div class="horzDivider w90"></div>');


            //admin poroxy question on shoter view
            if($('body#post-35458 main .for_mobile.orangeButton').text()=="View Advanced") {
                   $('#designation_level').closest('.hidden_fields').css('height','150px');
                   $('.fourOption_proxy_error_Modal_info .four_proxy-info').show(); 
                   $('.fourOption_proxy_error_Modal_info #fourOption_proxy2').prop('checked',true);
            }
             
        });
        //profile 5 button
        $('body#post-35458 #profile5_btn').click(function () {   
              //$('.profile2-part, .profile3-part').fadeOut();
              $('.profile5-part').fadeIn();
              $('body').addClass('profile5_disables');
              $('.payRate .currentPayWrapper').addClass('hide'); 
              $('.payRate .default_historyWrapper').removeClass('hide');    
              //hide default profile 1 & 2 & 8
              $('.profile1, .profile8, .profile6').fadeOut(); 
              //yes proxy
              $('body#post-35458 .permissions-section .employee_level p').removeClass('yes_proxy_text no_proxy_text'); 

              $('.twoColumnPayRate').addClass('profile2_payArchive') 
              //admin poroxy question on shoter view
              if($('body#post-35458 main .for_mobile.orangeButton').text()=="View Advanced") {
                   $('#designation_level').closest('.hidden_fields').css('height','110px');
                   $('.fourOption_proxy_error_Modal_info .four_proxy-info').hide(); 
               }

        });

        //profile 8 button
        $('body#post-35458 #profile8_btn').click(function () {   
              //$('.profile2-part, .profile3-part').fadeOut();
              $('.profile5-part').fadeIn();
              $('body').addClass('profile5_disables');
              $('.payRate .currentPayWrapper').addClass('hide'); 
              $('.payRate .default_historyWrapper').removeClass('hide');    
              //show default profile 8
              //$('.profile8').fadeIn(); 
              //hide default profile 1 & 2
              $('.profile1, .profile6').fadeOut(); 
              //yes proxy
              $('body#post-35458 .permissions-section .employee_level p').removeClass('yes_proxy_text no_proxy_text');
              $('body#post-35458 .permissions-section .employee_level p').text('Admin');     

              //iPAD PRO
              //13) Vertical.
              //Employee Profile #8: Make the section above Benefits the same size as the section above Permissions.
              $('.twoColumnPayRate').addClass('profile8_payArchive') 
              $('.twoColumnPayRate').removeClass('profile2_payArchive') 
              $('.who_can_see_section .horzDivider').removeClass('white_horzDivider');

              $('.who_can_see_section, .more-permission').empty();
            //Who can see this employee?
              $('.who_can_see_section').html('<h3 class="cedr-blue-font beneTitle">Who can see this employee?</h3><div class="col s6"><b class="cedr-blue-font">Owner</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Pitteroff, Phillip</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div><div class="horzDivider w90"></div>');
            //Who can this employee see?    
              $('.more-permission').show();                   
              $('.more-permission').html('<h3 class="cedr-blue-font beneTitle">Who can this employee see?</h3><div class="col s6"><b class="cedr-blue-font">Manager(s)</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Burdett, Anna</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Owens, Marvin</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div><div class="horzDivider w90"></div><div class="col s6"><b class="cedr-blue-font">Employee(s)</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Caralenno, Maria</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Hart, Michael</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Howard, Katherine</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div><div class="col s6"><p>Mills, Vicki</p></div> <div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div> <div class="col s6"><p>John, Doe</p></div> <div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="horzDivider w90"></div>');

              localStorage.removeItem("profileSelected"); 

              //admin poroxy question on shoter view
               if($('body#post-35458 main .for_mobile.orangeButton').text()=="View Advanced") {
                   $('#designation_level').closest('.hidden_fields').css('height','110px');
                   $('.fourOption_proxy_error_Modal_info .four_proxy-info').hide(); 
               }
              

        });

        //3) Vertical & Horizontal. Employee Profile #3: Take out the line at the bottom of this section.
        //4) Vertical & Horizontal. Employee Profile #4: Take out the line at the bottom of this section.
        $('body#post-35458 #profile3_btn, body#post-35458 #profile4_btn, body#post-35458 #profile6_btn').click(function () { 
            $('.who_can_see_section .horzDivider').addClass('white_horzDivider');
            
        })


        //modify permission text level on bottom permission section when click on profile buttons
        $('body#post-35458 #profile1_btn, body#post-35458 #profile2_btn,body#post-35458 #profile5_btn').click(function () {   
             $('body#post-35458 .permissions-section .employee_level p').text('Employee');
             $('.for_desktop h2.EEname').empty();
             $('.for_desktop h2.EEname').text('Joe, Owner');
             localStorage.clear();              
        });
        $('body#post-35458 #profile3_btn, body#post-35458 #profile4_btn').click(function () {   
             $('body#post-35458 .permissions-section .employee_level p').text('Admin');
             $('.for_desktop h2.EEname').empty();
             $('.for_desktop h2.EEname').text('Donaldson, Rebecca');
             localStorage.setItem("profileSelected","3_4");
             localStorage.setItem("designation_level","Admin_designation_level");
             localStorage.setItem("admin_proxy","No");       
             //selected by Admin default
             $('body#post-35458 #designation_level').prop('selectedIndex',2);                    
        });
        $('body#post-35458 #profile6_btn').click(function () {
            localStorage.setItem("designation_level","Admin_designation_level");  
             $('body#post-35458 .permissions-section .employee_level p').text('Admin');
             $('.for_desktop h2.EEname').empty();
             $('.for_desktop h2.EEname').text('Maria, Carr');
             localStorage.setItem("profileSelected","6");
             localStorage.setItem("admin_proxy", "Yes");    

             //selected by Admin Proxy default
             $('body#post-35458 #designation_level').prop('selectedIndex',2);         
        });
        localStorage.clear(); 

        //modify cancel modal text when click on profile 1 to 4 & 6 buttons
        $('body#post-35458 #profile1_btn, body#post-35458 #profile2_btn, body#post-35458 #profile3_btn, body#post-35458 #profile4_btn, body#post-35458 #profile6_btn').click(function () {   
            $('body#post-35458 .controlWrapper .cancelButton').addClass('profile_1_2_3_4_6');
            $('body#post-35458 .controlWrapper .cancelButton').removeClass('profile_5');
        });

        //modify cancel modal text when click on profile 5 button
        $('body#post-35458 #profile5_btn, body#post-35458 #profile8_btn').click(function () {   
            $('body#post-35458 .controlWrapper .cancelButton').addClass('profile_5');   
            $('body#post-35458 .controlWrapper .cancelButton').removeClass('profile_1_2_3_4_6');   
            //selected by Admin default
            $('body#post-35458 #designation_level').prop('selectedIndex',2);  
        });

        /*============ /profile 7 buton tabs ===========*/
        $('#admin-modals').on('click', '#four_custom_permissionApplyModal .permission-done-btn', function(){
            console.log('changed is displayed here...')
            // $('.more-permission').hide();

        });

         //modify cancel modal text when click on profile 1 & 2 buttons
        $('body#post-35458 #profile1_btn, body#post-35458 #profile2_btn').click(function () {
            console.log('clicked to profile 1 and 2');
            localStorage.setItem('profileSelected', '1_2');
            localStorage.setItem('designation_level', 'Employee_designation_level');
            $('body#post-35458 .permissions-section .employee_level p').text('Employee');
            $('.who_can_see_section, .more-permission').empty();
            //Who can see this employee?            
            $('.who_can_see_section').html('<h3 class="cedr-blue-font beneTitle">Who can see this employee?</h3><div class="col s6"><b class="cedr-blue-font">Owner</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Pitteroff, Phillip</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div><div class="horzDivider w90"></div><div class="col s6"><b class="cedr-blue-font">Admin(s)</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Gallo, Ronald</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Walters, Shannon</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div><div class="horzDivider w90"></div>');
        });


        //On shorter view when select any level from permission level dropdown then after changing one level to another level so when warning modal is show & click on cancel button so its should show the previous selected level instead of current level
        //get current value before change 
        let designation_level_old_value, designation_level_current_value;

        designation_level_old_value = $('#designation_level').find('option:selected').val();
       // console.log(designation_level_old_value)

        //when click on "continue" button on profile change custom warningModal
        $('#profile_change_custom_warningModal button.orangeButton.modal-close').click(function() {
            console.log('proceed') 
            designation_level_current_value = $('#designation_level').find('option:selected').val();
            designation_level_old_value = designation_level_current_value;

            //select option value to carry in below permission heading 
             var permission_select_level = $('#designation_level').find('option:selected').text();   
             $('body#post-35458 .permissions-section .employee_level p').text(permission_select_level);         
            
            switch(designation_level_current_value) {
                //if Admin is selected then height change
                case "5":
                    $('#designation_level').closest('.hidden_fields').css('height','150px');
                    //show proxy
                    $('.fourOption_proxy_error_Modal_info .four_proxy-info').show();  
                    //set local storage
                    localStorage.setItem('designation_level','Admin_designation_level');
                    $('#fourOption_proxy2').prop('checked','checked')
                    $('.fourOption_proxy_error_Modal_info #fourOption_proxy1').prop('checked',false);
                    $('body#post-35458 .permissions-section .employee_level p').addClass('yes_proxy_text');                    
                break;
                //if Manager is selected then height change
                case "3":
                    $('#designation_level').closest('.hidden_fields').css('height','110px');
                    //hide proxy
                    $('.fourOption_proxy_error_Modal_info .four_proxy-info').hide();  
                    //set local storage
                    localStorage.setItem('designation_level','Manager_designation_level');
                    // localStorage.removeItem("admin_proxy"); 
                    $('body#post-35458 .permissions-section .employee_level p').removeClass('yes_proxy_text no_proxy_text'); 
                break;
                //if Employee is selected then height change                
                case "1":
                    $('#designation_level').closest('.hidden_fields').css('height','110px');
                    //hide proxy
                    $('.fourOption_proxy_error_Modal_info .four_proxy-info').hide();
                    //set local storage
                    localStorage.setItem('designation_level','Employee_designation_level');
                    // localStorage.removeItem("admin_proxy"); 
                    $('body#post-35458 .permissions-section .employee_level p').removeClass('yes_proxy_text no_proxy_text'); 
                break;
            }
            
            //console.log('desgination olddd valueeee', designation_level_old_value, 'desgination currentttt valueeee', designation_level_current_value)   
        })


        $('.orangeButton.modal-close').click(function(){
            console.log('clicked closed');
            var temp_desig = localStorage.getItem('temp_designation_level')
            if(temp_desig==='Admin_designation_level'){
                $('div#custom_admin').addClass('mobile_permission_preeti_yes')
                if(localStorage.getItem('temp_admin_aproxy')==='Yes'){
                    $('#four_custom_lastpermissionApplyModal #custom_admin2 input, #four_custom_lastpermissionApplyModal #custom_manager2 input, #four_custom_lastpermissionApplyModal #custom_employees2 input').prop("checked", true);
                    $('#four_custom_lastpermissionApplyModal #custom_admin2 input, #four_custom_lastpermissionApplyModal #custom_employees2 input').attr("disabled", true);
                }
            }else if(temp_desig!='Admin_designation_level'){
                $('div#custom_admin').removeClass('mobile_permission_preeti_yes')
            }
            var adminProxy = localStorage.getItem('admin_proxy')
            if(adminProxy==='Yes'){
                    $('input#fourOption_proxy1').prop('checked', true)
                    if($('body#post-35458 .permissions-section .employee_level p').hasClass('no_proxy_text')){
                        $('body#post-35458 .permissions-section .employee_level p').addClass('yes_proxy_text')
                    }
            }
        })

        

        //2) Vertical & Horizontal = Custom permissions should not clear when "View Less" is selected. https://www.screencast.com/t/mDnMxOlmrUWQ
        $('#designation_level').on('change', function(){ 
            if(localStorage.getItem('admin_proxy')==='Yes'){
                console.log('adminproxy yes')
                setTimeout(() => {
                    $('input#fourOption_proxy1').prop('checked', true);
                }, 2000);
            }

            $('#profile_change_custom_warningModal').modal('open');

            var checkAdmin=localStorage.getItem('admin_proxy')
            var selectedOption = $('select#designation_level').val();

            console.log(selectedOption,'admin content to show')
            if(selectedOption==='5'){
                $('.who_can_see_section, .more-permission').empty();
                //Who can see this employee?
                $('.who_can_see_section').html('<h3 class="cedr-blue-font beneTitle">Who can see this employee?</h3><div class="col s6"><b class="cedr-blue-font">Owner</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Pitteroff, Phillip</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div><div class="horzDivider w90"></div>');
                //Who can this employee see?    
                $('.more-permission').show();                   
                $('.more-permission').html('<h3 class="cedr-blue-font beneTitle">Who can this employee see?</h3><div class="col s6"><b class="cedr-blue-font">Manager(s)</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Burdett, Anna</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Owens, Marvin</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div><div class="horzDivider w90"></div><div class="col s6"><b class="cedr-blue-font">Employee(s)</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Caralenno, Maria</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Hart, Michael</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Howard, Katherine</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div> <div class="col s6"><p>Mills, Vicki</p></div> <div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div> <div class="col s6"><p>John, Doe</p></div> <div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div> <div class="horzDivider w90"></div>');
            }


            //after on chnage when click on cancel button
            $('#profile_change_custom_warningModal a.cancelButton').click(function() { 
                /*console.log('olddd', designation_level_old_value)*/
                // console.log('currentttt', designation_level_current_value)

                 if(designation_level_old_value == "1") {
                    $('#designation_level').prop('selectedIndex',0); 
                    //proxy question hide
                    $('.fourOption_proxy_error_Modal_info .four_proxy-info').hide(); 
                    $('#designation_level').closest('.hidden_fields').css('height','110px'); 
                    $('body#post-35458 .permissions-section .employee_level p').removeClass('yes_proxy_text');   
                 } 
                else if(designation_level_old_value == "3") {
                    $('#designation_level').prop('selectedIndex',1); 
                    //proxy question hide
                    $('.fourOption_proxy_error_Modal_info .four_proxy-info').hide();  
                    $('#designation_level').closest('.hidden_fields').css('height','110px');
                    $('body#post-35458 .permissions-section .employee_level p').removeClass('yes_proxy_text');      
                 }   
                 else if(designation_level_old_value == "5") {

                    $('#designation_level').prop('selectedIndex',2); 
                    //proxy question show
                    $('.fourOption_proxy_error_Modal_info .four_proxy-info').show();
                    $('#designation_level').closest('.hidden_fields').css('height','150px');

                 }


                levelCheck();

            });

            //when Profile change warning Modal open
              

        })      
        

        //Dropdown = so Employee, Manager, Admin, and then when Admin is selected, you get the Proxy question below = open Proxy modal
        $('.fourOption_proxy_error_Modal_info > .four_proxy-info .default_custom_proxy_checkbox1').on('change',function(){
            $('#fourOption_proxy_error_Modal').modal('open');       
        });

        //Section 1 - MOBILE
        //2) Vertical & Horizontal. Default Permissions when switching user type = https://www.screencast.com/t/n2fuLKVyjPH
        //2) Vertical & Horizontal = Custom permissions should not clear when "View Less" is selected. https://www.screencast.com/t/mDnMxOlmrUWQ
        $('body#post-35458 main .for_mobile.orangeButton').click(function() {    
            var designation_name = localStorage.getItem('designation_level');
            switch(designation_name) {  
                //default permission = Employee Level & manager Level
                case "Employee_designation_level":
                case "Manager_designation_level":
                    $('.who_can_see_section, .more-permission').empty();
                    // $('.who_can_see_section').empty();
                    //Who can see this employee?            
                    $('.who_can_see_section').html('<h3 class="cedr-blue-font beneTitle">Who can see this employee?</h3><div class="col s6"><b class="cedr-blue-font">Owner</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Pitteroff, Phillip</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div><div class="horzDivider w90"></div><div class="col s6"><b class="cedr-blue-font">Admin(s)</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Gallo, Ronald</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Walters, Shannon</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div><div class="horzDivider w90"></div>');
                break;
            
            }  
        

            //Dropdown = so Employee, Manager, Admin, and then when Admin is selected, you get the Proxy question below = set Proxy heading
            var designation_admin_proxy = localStorage.getItem('admin_proxy');
            switch(designation_admin_proxy) {    
                //default permission = Admin Level  "Yes"      
                case "Yes":
                    if(localStorage.getItem('designation_level')==='Admin_designation_level'){
                        $('.who_can_see_section, .more-permission').empty();
                        //Who can see this employee?
                        $('.who_can_see_section').html('<h3 class="cedr-blue-font beneTitle">Who can see this employee?</h3><div class="col s6"><b class="cedr-blue-font">Owner</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Pitteroff, Phillip</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div><div class="horzDivider w90"></div>');
                        //Who can this employee see?    
                        $('.more-permission').show();                   
                        $('.more-permission').html('<h3 class="cedr-blue-font beneTitle">Who can this employee see?</h3><div class="col s6"><b class="cedr-blue-font">Admin(s)</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Gallo, Ronald</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Walters, Shannon</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div><div class="horzDivider w90"></div><div class="col s6"><b class="cedr-blue-font">Manager(s)</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Burdett, Anna</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Owens, Marvin</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div><div class="horzDivider w90"></div><div class="col s6"><b class="cedr-blue-font">Employee(s)</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Caralenno, Maria</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Hart, Michael</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Howard, Katherine</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div><div class="col s6"><p>Mills, Vicki</p></div> <div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div> <div class="col s6"><p>John, Doe</p></div> <div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="horzDivider w90"></div>');
                    }
                break;

                //default permission = Admin Level  "No"      
                case "No":
                if(localStorage.getItem('designation_level')==='Admin_designation_level'){
                    $('.who_can_see_section, .more-permission').empty();
                    //Who can see this employee?
                    $('.who_can_see_section').html('<h3 class="cedr-blue-font beneTitle">Who can see this employee?</h3><div class="col s6"><b class="cedr-blue-font">Owner</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Pitteroff, Phillip</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div><div class="horzDivider w90"></div>');
                    //Who can this employee see?    
                    $('.more-permission').show();                   
                    $('.more-permission').html('<h3 class="cedr-blue-font beneTitle">Who can this employee see?</h3><div class="col s6"><b class="cedr-blue-font">Manager(s)</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Burdett, Anna</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Owens, Marvin</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div><div class="horzDivider w90"></div><div class="col s6"><b class="cedr-blue-font">Employee(s)</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Caralenno, Maria</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Hart, Michael</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Howard, Katherine</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div> <div class="col s6"><p>Mills, Vicki</p></div> <div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div> <div class="col s6"><p>John, Doe</p></div> <div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div> <div class="horzDivider w90"></div>');

                }
                    
                break;

            }

            //Dropdown = so Employee, Manager, Admin, and then when Admin is selected, you get the Proxy question below = set Proxy heading
            localStorage.getItem('admin_proxy') == "Yes" ? $('body#post-35458 .permissions-section .employee_level p').addClass('yes_proxy_text') : $('body#post-35458 .permissions-section .employee_level p').removeClass('yes_proxy_text'); 



            //On shorter view when select any level from permission level dropdown then after changing one level to another level so when warning modal is show & click on cancel button so its should show the previous selected level instead of current level
            var designation_level_value = $('#designation_level').find('option:selected').val()
            switch(designation_level_value) {  
                //default permission = Employee Level & manager Level
                case "1":
                    $('body#post-35458 .permissions-section .employee_level p').text('Employee');
                    $('.who_can_see_section, .more-permission').empty();
                    //Who can see this employee?            
                    $('.who_can_see_section').html('<h3 class="cedr-blue-font beneTitle">Who can see this employee?</h3><div class="col s6"><b class="cedr-blue-font">Owner</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Pitteroff, Phillip</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div><div class="horzDivider w90"></div><div class="col s6"><b class="cedr-blue-font">Admin(s)</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Gallo, Ronald</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Walters, Shannon</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div><div class="horzDivider w90"></div>');
                break;
                case "3":
                    $('body#post-35458 .permissions-section .employee_level p').text('Manager');        
                    $('.who_can_see_section, .more-permission').empty();
                    //Who can see this employee?            
                    $('.who_can_see_section').html('<h3 class="cedr-blue-font beneTitle">Who can see this employee?</h3><div class="col s6"><b class="cedr-blue-font">Owner</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Pitteroff, Phillip</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div><div class="horzDivider w90"></div><div class="col s6"><b class="cedr-blue-font">Admin(s)</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Gallo, Ronald</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Walters, Shannon</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div><div class="horzDivider w90"></div>');
                break;
            
            
            }

            var profileSelected = localStorage.getItem('profileSelected');
            switch(profileSelected) { 

                case "3_4":
                    $('body#post-35458 .permissions-section .employee_level p').removeClass('yes_proxy_text');
                    $('.who_can_see_section, .more-permission').empty();
                    //Who can see this employee?
                    $('.who_can_see_section').html('<h3 class="cedr-blue-font beneTitle">Who can see this employee?</h3><div class="col s6"><b class="cedr-blue-font">Owner</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Pitteroff, Phillip</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div><div class="horzDivider w90"></div>');
                    //Who can this employee see?    
                    $('.more-permission').show();                   
                    $('.more-permission').html('<h3 class="cedr-blue-font beneTitle">Who can this employee see?</h3><div class="col s6"><b class="cedr-blue-font">Manager(s)</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Burdett, Anna</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Owens, Marvin</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div><div class="horzDivider w90"></div><div class="col s6"><b class="cedr-blue-font">Employee(s)</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Caralenno, Maria</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Hart, Michael</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Howard, Katherine</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div> <div class="col s6"><p>Mills, Vicki</p></div> <div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div> <div class="col s6"><p>John, Doe</p></div> <div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div> <div class="horzDivider w90"></div>');
                break; 

                case "6":
                    $('body#post-35458 .permissions-section .employee_level p').addClass('yes_proxy_text')
                    $('.who_can_see_section, .more-permission').empty();
                    //Who can see this employee?
                    $('.who_can_see_section').html('<h3 class="cedr-blue-font beneTitle">Who can see this employee?</h3><div class="col s6"><b class="cedr-blue-font">Owner</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Pitteroff, Phillip</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div><div class="horzDivider w90"></div>');
                    //Who can this employee see?    
                    $('.more-permission').show();                   
                    $('.more-permission').html('<h3 class="cedr-blue-font beneTitle">Who can this employee see?</h3><div class="col s6"><b class="cedr-blue-font">Admin(s)</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Gallo, Ronald</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Walters, Shannon</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div><div class="horzDivider w90"></div><div class="col s6"><b class="cedr-blue-font">Manager(s)</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Burdett, Anna</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Owens, Marvin</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div><div class="horzDivider w90"></div><div class="col s6"><b class="cedr-blue-font">Employee(s)</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Caralenno, Maria</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Hart, Michael</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Howard, Katherine</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div> <div class="col s6"><p>Mills, Vicki</p></div> <div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div> <div class="col s6"><p>John, Doe</p></div> <div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="horzDivider w90"></div>');
                    
                break;
            }

            // $('.only_permission_level select#designation_level').change(function(){ 
            //         var permission_select_level = $(this).find('option:selected').text();
            //         $('body#post-35458 .permissions-section .employee_level p').text(permission_select_level);
            //     });



        }); 

       /*== permission section - record & pay checkbox ==*/
        $('input:checkbox.main-checkbox').click(function () {
            var array = [];
            var parent = $(this).closest('.main-parent');
            //check or uncheck sub-checkbox
            $(parent).find('.sub-checkbox').prop("checked", $(this).prop("checked"))
            //push checked sub-checkbox value to array
            $(parent).find('.sub-checkbox:checked').each(function () {
                array.push($(this).val());
            })
            $(this).removeClass('straight-line')
            if($(this).prop("checked") == false){
                $(parent).find('#namepay1-2, #namepay1-3, #namepay2-2, #namepay2-3, #namepayl3, #namepayl4, #namepayl6, #namepayl7, #namepayl9, #namepayl10, #namepayl11, .main-checkbox2, #custom_namepay1-2, #custom_namepay1-3, #custom_namepay2-2, #custom_namepay2-3, #custom_namepayl3, #custom_namepayl4, #custom_namepayl6, #custom_namepayl7, #custom_namepayl9, #custom_namepayl10,#custom_namepayl_10, #custom_namepayl11, #custom_namepayl_11, #owner_custom_namepay1-2, #owner_custom_namepay1-3, #owner_custom_namepay2-2, #owner_custom_namepay2-3, #owner_custom_namepayl3, #owner_custom_namepayl4, #owner_custom_namepayl6, #owner_custom_namepayl7, #owner_custom_namepayl9, #owner_custom_namepayl10, #owner_custom_namepayl11').prop("checked",""); 
                if($(this).hasClass('straight-line')){
                    $(this).removeClass('straight-line')
                }



            }  
        });
        /*== permission section - record & pay checkbox ==*/
        $('input:checkbox.main-checkbox2').click(function () {
            var array = [];
            var parent = $(this).closest('.main-parent');
            $(this).removeClass('straight-line');       
            if($(this).prop("checked") == true){
                //check or uncheck sub-checkbox
                $(parent).find('.sub-checkbox, .sub-checkbox2').prop("checked", $(this).prop("checked"))
                $('.main-checkbox').removeClass('straight-line');
            }
            else if($(this).prop("checked") == false){
                // $('#namepay1-2, #namepay1-3, #namepay2-2, #namepay2-3, #namepayl3, #namepayl4, #namepayl6, #namepayl7, #namepayl9, #namepayl10, #namepayl11, #custom_namepay1-2, #custom_namepay1-3, #custom_namepay2-2, #custom_namepay2-3, #custom_namepayl3, #custom_namepayl4, #custom_namepayl6, #custom_namepayl7, #custom_namepayl9, #custom_namepayl10,#custom_namepayl_10, #custom_namepayl11, #custom_namepayl_11, #owner_custom_namepay1-2, #owner_custom_namepay1-3, #owner_custom_namepay2-2, #owner_custom_namepay2-3, #owner_custom_namepayl3, #owner_custom_namepayl4, #owner_custom_namepayl6, #owner_custom_namepayl7, #owner_custom_namepayl9, #owner_custom_namepayl10, #owner_custom_namepayl11').prop("checked",""); 

                $(parent).find('.pay-checkbox .sub-checkbox2').prop("checked", false)


                if($(this).hasClass('straight-line')){
                    $(this).removeClass('straight-line')
                }
            } 
            
            //push checked sub-checkbox value to array
            $(parent).find('.sub-checkbox:checked').each(function () {
                array.push($(this).val());
            })
        });

        /*== permission section - record & pay checkbox ==*/
       $('#nameRecords1-2, #nameRecords1-3, #nameRecords2-2, #nameRecords2-3, #nameRecordsl3, #nameRecordsl4, #nameRecordsl6, #nameRecordsl7, #nameRecordsl9, #nameRecordsl10, #nameRecordsl11, #custom_nameRecords1-2, #custom_nameRecords1-3, #custom_nameRecords2-2, #custom_nameRecords2-3, #custom_nameRecordsl3, #custom_nameRecordsl4, #custom_nameRecordsl6, #custom_nameRecordsl7, #custom_nameRecordsl9, #custom_nameRecordsl10, #custom_nameRecordsl11, #custom_nameRecordsl_10, #custom_nameRecordsl_11, #owner_custom_nameRecords1-2, #owner_custom_nameRecords1-3, #owner_custom_nameRecords2-2, #owner_custom_nameRecords2-3, #owner_custom_nameRecordsl3, #owner_custom_nameRecordsl4, #owner_custom_nameRecordsl6, #owner_custom_nameRecordsl7, #owner_custom_nameRecordsl9, #owner_custom_nameRecordsl10, #owner_custom_nameRecordsl11').click(function () {   
           var parent = $(this).closest('.right'); 
           if($(this).prop("checked") == false) { 
                $(parent).find('#namepay1-2, #namepay1-3, #namepay2-2, #namepay2-3, #namepayl3, #namepayl4, #namepayl6, #namepayl7, #namepayl9, #namepayl10, #namepayl11, #custom_namepay1-2, #custom_namepay1-3, #custom_namepay2-2, #custom_namepay2-3, #custom_namepayl3, #custom_namepayl4, #custom_namepayl6, #custom_namepayl7, #custom_namepayl9, #custom_namepayl10,#custom_namepayl_10, #custom_namepayl11, #custom_namepayl_11, #owner_custom_namepay1-2, #owner_custom_namepay1-3, #owner_custom_namepay2-2, #owner_custom_namepay2-3, #owner_custom_namepayl3, #owner_custom_namepayl4, #owner_custom_namepayl6, #owner_custom_namepayl7, #owner_custom_namepayl9, #owner_custom_namepayl10, #owner_custom_namepayl11').prop("checked",""); 
                
                  $(this).closest('.main-parent') .find('.main-checkbox2').addClass('straight-line');               
           } 

       });
      /*== permission section - record & pay checkbox ==*/
       $('#namepay1-2, #namepay1-3, #namepay2-2, #namepay2-3, #namepayl3, #namepayl4, #namepayl6, #namepayl7, #namepayl9, #namepayl10, #namepayl11, #custom_namepay1-2, #custom_namepay1-3, #custom_namepay2-2, #custom_namepay2-3, #custom_namepayl3, #custom_namepayl4, #custom_namepayl6, #custom_namepayl7, #custom_namepayl9, #custom_namepayl10,#custom_namepayl_10, #custom_namepayl11, #custom_namepayl_11, #owner_custom_namepay1-2, #owner_custom_namepay1-3, #owner_custom_namepay2-2, #owner_custom_namepay2-3, #owner_custom_namepayl3, #owner_custom_namepayl4, #owner_custom_namepayl6, #owner_custom_namepayl7, #owner_custom_namepayl9, #owner_custom_namepayl10, #owner_custom_namepayl11').click(function () {   
            var parent = $(this).closest('.right');  
            $(parent).find('#nameRecords1-2, #nameRecords1-3, #nameRecords2-2, #nameRecords2-3, #nameRecordsl3, #nameRecordsl4, #nameRecordsl6, #nameRecordsl7, #nameRecordsl9, #nameRecordsl10, #nameRecordsl11, #custom_nameRecords1-2, #custom_nameRecords1-3, #custom_nameRecords2-2, #custom_nameRecords2-3, #custom_nameRecordsl3, #custom_nameRecordsl4, #custom_nameRecordsl6, #custom_nameRecordsl7, #custom_nameRecordsl9, #custom_nameRecordsl10, #custom_nameRecordsl11, #custom_nameRecordsl_10, #custom_nameRecordsl_11, #owner_custom_nameRecords1-2, #owner_custom_nameRecords1-3, #owner_custom_nameRecords2-2, #owner_custom_nameRecords2-3, #owner_custom_nameRecordsl3, #owner_custom_nameRecordsl4, #owner_custom_nameRecordsl6, #owner_custom_nameRecordsl7, #owner_custom_nameRecordsl9, #owner_custom_nameRecordsl10, #owner_custom_nameRecordsl11').prop("checked", "checked");

       });
      

        /*== heading info box ==*/
        // $('.fa-question-circle').on('click', function(){
        //  $(this).siblings('.info').toggle();
        // });
        $('.fa-question-circle').on('click', function(){
            $(this).siblings('.info').toggle();
        });

         
        //when click on profile 1,2,3,4 & 6 cancel modal 
        $('body#post-35458 .controlWrapper').on('click','.cancelButton.profile_1_2_3_4_6', function(){
            var profile_title = $('.for_desktop h2.EEname').text();
            var single_quotes = "'"
            $('.custom_modal p.cedr-darkgray-font.center').text('Changes to '+profile_title+''+single_quotes+'s info have not been saved.');            
        });
        //when click on profile 5 cancel modal
        $('body#post-35458 .controlWrapper').on('click','.cancelButton.profile_5', function(){
            $('.custom_modal p.cedr-darkgray-font.center').text('Changes to your info have not been saved.'); 
        });

       /*====== four_admin_selection - four permisison modals ======*/
        const for_employee_selection =()=>{
            $('#four_custom_permissionApplyModal #custom_manager').find('input').prop('checked',false);
            $('#four_custom_permissionApplyModal #custom_admin').find('input').prop('checked',true);
        }
        const for_manager_selection =()=>{
            $('#four_custom_permissionApplyModal #custom_manager, #four_custom_lastpermissionApplyModal #custom_manager2, #four_custom_lastpermissionApplyModal #custom_employees2').find('input').prop('checked',false);
            $('#four_custom_permissionApplyModal #custom_admin').find('input').prop('checked',true);
        }
        function four_admin_selection() {
            $('#four_custom_permissionApplyModal .manager_tab_btn').prev('li').show();            
            $('.manager_tab_btn, .owner_tab_btn, #admin-modals #employee_orangeButton, #admin_four_proxy_orangeButton, #admin_four_proxy_no_orangeButton').hide();
            $('.admin_tab_btn, #admin-modals #orangeButton').show();  
            //$('#admin-modals #orangeButton').css('display','block');
            $('.admin_tab_btn').siblings('li').children().removeClass('active');
            $('#admin-modals .manager_level.active').siblings('span.active').removeClass('active');
            $('.admin_level').css("display", "inline-block");
            $('.admin_level2').css("display", "block");
            $('.admin_level2').siblings('.orangeButton').hide();
            $('#admin-modals .four_proxy-info .proxy_checkbox').prop('checked',false);
            


            /*== four_custom_permissionApplyModal ==*/
            $('#four_custom_permissionApplyModal #custom_admin').find('input').prop('checked',false);            
            $('#four_custom_permissionApplyModal .tabs li.tab').eq(0).children().addClass('active');
            $('#four_custom_permissionApplyModal .tabs li.tab').eq(0).siblings().children().removeClass('active');
            var permission_owner_tab = $('#four_custom_permissionApplyModal .tabs li.tab').eq(0).children().attr('href');            
            $(permission_owner_tab).show();
            $(permission_owner_tab).siblings().hide()


             /*== custom_lastpermissionApplyModal ==*/
            $('#four_custom_lastpermissionApplyModal #custom_manager2, #four_custom_lastpermissionApplyModal #custom_employees2').find('input').prop('checked',true);
            $('#four_custom_lastpermissionApplyModal .admin_tab_btn a').addClass('active')
            $('#four_custom_lastpermissionApplyModal #custom_admin2').css("display", "block")
            $('#four_custom_lastpermissionApplyModal #custom_manager2').hide();

            var lastpermission_owner_tab = $('#four_custom_lastpermissionApplyModal .tabs li.tab').eq(1).children().attr('href');            
            $(lastpermission_owner_tab).show();
            $(lastpermission_owner_tab).siblings().hide()

            $('#four_custom_permissionApplyModal .tabs li.tab a, #four_custom_lastpermissionApplyModal .tabs li.tab a').click(function(){
                $(this).addClass('active');
                $(this).parent().siblings('li').find('a').removeClass('active');
                var other_tab = $(this).attr('href');            
                $(other_tab).show();
                $(other_tab).siblings().hide()                

            });

             //back-btn - start back up to top section
            $('#four_custom_lastpermissionApplyModal .back-btn').click(function() {
                   $('#four_custom_permissionApplyModal .tabs li.tab').eq(0).children().addClass('active');
                   $('#four_custom_permissionApplyModal .tabs li.tab').eq(0).siblings().children().removeClass('active'); 
                   $(permission_owner_tab).show();
                   $(permission_owner_tab).siblings().hide();  
            })

            //back-btn - start back up to top section
            $('#four_custom_permissionApplyModal .orangeButton').click(function() {
                $('#four_custom_lastpermissionApplyModal .tabs li.tab').eq(1).children().addClass('active');
                $('#four_custom_lastpermissionApplyModal .tabs li.tab').eq(1).siblings().children().removeClass('active');
                var last_manager_tab = $('#four_custom_lastpermissionApplyModal .tabs li.tab').eq(1).children().attr('href');  
                $(last_manager_tab).show();
                $(last_manager_tab).siblings().hide(); 
            })

            $('#four_custom_lastpermissionApplyModal #custom_admin2 .main-checkbox, #four_custom_lastpermissionApplyModal #custom_admin2 .main-checkbox2, #four_custom_lastpermissionApplyModal #custom_admin2 .sub-checkbox, #four_custom_lastpermissionApplyModal #custom_admin2 .sub-checkbox2').parent().addClass('blue-bg');

            $('#four_custom_lastpermissionApplyModal #custom_manager2 .main-checkbox, #four_custom_lastpermissionApplyModal #custom_manager2 .main-checkbox2, #four_custom_lastpermissionApplyModal #custom_manager2 .sub-checkbox, #four_custom_lastpermissionApplyModal #custom_manager2 .sub-checkbox2, #four_custom_lastpermissionApplyModal #custom_employees2 .main-checkbox, #four_custom_lastpermissionApplyModal #custom_employees2 .main-checkbox2, #four_custom_lastpermissionApplyModal #custom_employees2 .sub-checkbox, #four_custom_lastpermissionApplyModal #custom_employees2 .sub-checkbox2').parent().addClass('blue-bg');

            $('#four_custom_lastpermissionApplyModal #custom_admin2, #four_custom_lastpermissionApplyModal #custom_manager2, #four_custom_lastpermissionApplyModal #custom_employees2').find('input').attr("disabled", false);


            $('#four_custom_insuranceModal2 .orangeButton').removeClass('disabled-button');
            $('.button1_modal #employee_orangeButton').addClass('disabled-button');

        }

        

        $('#four_custom_insuranceModal2 select').change(function(){ 

            console.log('selected Levels')

            var desig = localStorage.getItem('designation_level');

            var user_level = $(this).find('option:selected').val()
            if(user_level=="button1_manager") {
                    console.log('temp manager')
                    
                    localStorage.setItem('temp_designation_level','Manager_designation_level');

                    const tempDesig = localStorage.getItem('temp_designation_level')
                    const desigLevel = localStorage.getItem('designation_level')

                    if(tempDesig!=desigLevel){
                        for_manager_selection()
                        console.log("not matched")
                    }

                    $('#custom_admin, #custom_manager, #custom_manager2').removeClass('mobile_permission_preeti_no mobile_permission_preeti_yes')
                    

                    $('#four_custom_permissionApplyModal .manager_tab_btn').prev('li').show()
                    $('.manager_tab_btn').show();
                    $('#admin-modals #orangeButton').css('display','block');
                    $('#admin-modals .four_proxy-info, #admin-modals #employee_orangeButton, #admin_four_proxy_orangeButton, #admin_four_proxy_no_orangeButton').hide();
                    $('.admin_tab_btn, .owner_tab_btn').hide();
                    $('.admin_tab_btn').siblings('li').children().removeClass('active');
                    $('#admin-modals .manager_level.active').siblings('span.active').removeClass('active');
                    $('.manager_level').css("display", "inline-block");
                    $('.manager_level2').css("display", "block");
                    $('.manager_level2').siblings('.orangeButton').hide();
                    $('#admin-modals .four_proxy-info .proxy_checkbox').prop('checked',false);

                    
                    var permission_owner_tab = $('#four_custom_permissionApplyModal .tabs li.tab').eq(0).children().attr('href');            
                    $(permission_owner_tab).show();
                    $(permission_owner_tab).siblings().hide()

                    $('#four_custom_permissionApplyModal .tabs li.tab').eq(0).children().addClass('active');
                    $('#four_custom_permissionApplyModal .tabs li.tab').eq(0).siblings().children().removeClass('active');
                    $('#four_custom_permissionApplyModal .tabs li.tab a, #four_custom_lastpermissionApplyModal .tabs li.tab a').click(function(){
                        $(this).addClass('active');
                        $(this).parent().siblings('li').find('a').removeClass('active');
                        var other_tab = $(this).attr('href');            
                        $(other_tab).show();
                        $(other_tab).siblings().hide()  
                    });

                    //back-btn - start back up to top section
                    $('#four_custom_lastpermissionApplyModal .back-btn').click(function() {
                        $('#four_custom_permissionApplyModal .tabs li.tab').eq(0).children().addClass('active');
                        $('#four_custom_permissionApplyModal .tabs li.tab').eq(0).siblings().children().removeClass('active'); 
                        $(permission_owner_tab).show();
                        $(permission_owner_tab).siblings().hide()    
                    })

                    //back-btn - start back up to top section
                    $('#four_custom_permissionApplyModal .orangeButton').click(function() {
                        $('#four_custom_lastpermissionApplyModal .tabs li.tab').eq(2).children().addClass('active');
                        $('#four_custom_lastpermissionApplyModal .tabs li.tab').eq(2).siblings().children().removeClass('active');
                        var last_manager_tab = $('#four_custom_lastpermissionApplyModal .tabs li.tab').eq(2).children().attr('href');  
                        $(last_manager_tab).show();
                        $(last_manager_tab).siblings().hide() 
                    })

                    $('#four_custom_lastpermissionApplyModal .tabs li.tab').eq(1).children().addClass('active');
                    $('#four_custom_lastpermissionApplyModal .admin_tab_btn').next('li').children('a').addClass('active');
                    $('#four_custom_lastpermissionApplyModal #custom_admin2 .main-checkbox, #four_custom_lastpermissionApplyModal #custom_admin2 .main-checkbox2, #four_custom_lastpermissionApplyModal #custom_admin2 .sub-checkbox, #four_custom_lastpermissionApplyModal #custom_admin2 .sub-checkbox2, #four_custom_lastpermissionApplyModal #custom_manager2 .main-checkbox, #four_custom_lastpermissionApplyModal #custom_manager2 .main-checkbox2, #four_custom_lastpermissionApplyModal #custom_manager2 .sub-checkbox, #four_custom_lastpermissionApplyModal #custom_manager2 .sub-checkbox2, #four_custom_lastpermissionApplyModal #custom_employees2 .main-checkbox, #four_custom_lastpermissionApplyModal #custom_employees2 .main-checkbox2, #four_custom_lastpermissionApplyModal #custom_employees2 .sub-checkbox, #four_custom_lastpermissionApplyModal #custom_employees2 .sub-checkbox2').parent().addClass('blue-bg');
                    $('#four_custom_lastpermissionApplyModal #custom_admin2, #four_custom_lastpermissionApplyModal #custom_manager2, #four_custom_lastpermissionApplyModal #custom_employees2').find('input').attr("disabled", false);

                    $('#four_custom_insuranceModal2 .orangeButton').removeClass('disabled-button');

                    //10b) The Manager default settings are not correct on profiles 3, 4, and 6:
                    
                    

                }
                else if(user_level=="button1_admin") {
                    $('#admin-modals .four_proxy-info').show();
                    setTimeout(()=>{$('.modal-content input#proxy4').prop('checked', true)}, 500)
                    localStorage.setItem('admin_proxy', 'No')
                   

                    // $('.controlWrapper .orangeButton.modal-close').click(function(){
                        localStorage.setItem('temp_designation_level','Admin_designation_level');
                        var adminProxy = localStorage.getItem("admin_proxy");
                        if(adminProxy==='No'){
                            console.log('default proxy')
                            $('#four_custom_insuranceModal2 #orangeButton').css('display','block');
                            four_admin_selection();
                            $('#custom_admin, #custom_manager, #custom_manager2').addClass('mobile_permission_preeti_yes')
                        }
                        

                    // })
                    


                        
                    // $('#four_custom_insuranceModal2 .orangeButton').addClass('disabled-button');
                    
                    

                }
                else if(user_level=="button1_employee") {

                    // $('body#post-35458 .permissions-section .employee_level p').removeClass('yes_proxy_text')
                    // setTimeout(()=>{ $('.more-permission.profile3-part').hide()},200)

                    localStorage.setItem('temp_designation_level','Employee_designation_level');

                    const tempDesig = localStorage.getItem('temp_designation_level')
                    const desigLevel = localStorage.getItem('designation_level')

                    if(tempDesig!=desigLevel){
                        for_employee_selection()
                        console.log("not matched employee")
                        
                    }
                    
                    $('#custom_admin, #custom_manager, #custom_manager2').removeClass('mobile_permission_preeti_no mobile_permission_preeti_yes')
                    
                    $('#four_custom_permissionApplyModal .manager_tab_btn').prev('li').show()

                    $('#admin-modals #orangeButton, #admin_four_proxy_orangeButton, #admin_four_proxy_no_orangeButton').hide();
                    $('#admin-modals #employee_orangeButton').show();
                    $('#admin-modals .four_proxy-info').hide();
                    $('.manager_level, .manager_level2').hide();
                    $('.manager_level2').siblings('.orangeButton').show();
                    $('#admin-modals .button1_modal .four_proxy-info .proxy_checkbox').prop('checked',false);
                    
                    $('#four_custom_insuranceModal2 .orangeButton').removeClass('disabled-button');
                    $('.manager_tab_btn').show();

                    

                } else if(user_level=="chooseone") {
                     $('#four_custom_insuranceModal2 .orangeButton').addClass('disabled-button');
                } 

                else {
                     $('.manager_level').hide();
                     $('#admin-modals .button1_modal .four_proxy-info').hide();
            }
        });  


        /*====== default_custom_proxy_checkbox1 =====*/
        /*===== button 2 modals proxy checkbox 1 & checkbox 2 ====*/
        $('.fourOption_proxy_error_Modal_info .four_proxy-info .default_custom_proxy_checkbox1').click(function() {
            //set localstorage when click on proxy No = Admin yes/no selection not saving
            localStorage.setItem("admin_proxy", "Yes");
            $('a.cancelButton.profile_1_2_3_4_6').click(function(){
                console.log('cancelled')
                $('input#fourOption_proxy2').prop('checked', true)
                localStorage.setItem("admin_proxy", "No");
                $('body#post-35458 .permissions-section .employee_level p').removeClass('yes_proxy_text');
            })
            $('#admin-modals #admin_four_proxy_orangeButton').css('display','block');
            $('#admin-modals #admin_four_proxy_no_orangeButton, #four_custom_insuranceModal2 #orangeButton').hide();
            $('#four_custom_permissionApplyModal .manager_tab_btn').prev('li').hide();
            $('#four_custom_lastpermissionApplyModal .tabs').find('li').eq(3).show();        
            // $('#four_custom_lastpermissionApplyModal #custom_admin2 .main-checkbox, #four_custom_lastpermissionApplyModal #custom_admin2 .main-checkbox2, #four_custom_lastpermissionApplyModal #custom_admin2 .sub-checkbox, #four_custom_lastpermissionApplyModal #custom_admin2 .sub-checkbox2, #four_custom_lastpermissionApplyModal #custom_manager2 .main-checkbox, #four_custom_lastpermissionApplyModal #custom_manager2 .main-checkbox2, #four_custom_lastpermissionApplyModal #custom_manager2 .sub-checkbox, #four_custom_lastpermissionApplyModal #custom_manager2 .sub-checkbox2').parent().removeClass('blue-bg');
            $('#four_custom_insuranceModal2 .orangeButton').removeClass('disabled-button');
            $('#four_custom_lastpermissionApplyModal .owner_tab_btn').hide();

            //profile 6 Proxy yes all level selected & gray by default
            $('#four_custom_lastpermissionApplyModal #custom_admin2 input').prop('checked',true);
            $('#four_custom_lastpermissionApplyModal #custom_admin2 input, #four_custom_lastpermissionApplyModal #custom_manager2 input, #four_custom_lastpermissionApplyModal #custom_employees2 input').attr("disabled", true);
            $('#four_custom_lastpermissionApplyModal #custom_admin2 input, #four_custom_lastpermissionApplyModal #custom_manager2 input, #four_custom_lastpermissionApplyModal #custom_employees2 input').parent().removeClass('blue-bg');

            //mobile preeti
            $('#four_custom_permissionApplyModal #custom_admin, #four_custom_permissionApplyModal #custom_manager, #four_custom_lastpermissionApplyModal #custom_manager2',).addClass('mobile_permission_preeti_yes');
            $('#four_custom_permissionApplyModal #custom_admin, #four_custom_permissionApplyModal #custom_manager#four_custom_lastpermissionApplyModal #custom_manager2').removeClass('mobile_permission_preeti_no');

        });

        $('.fourOption_proxy_error_Modal_info .four_proxy-info .default_custom_proxy_checkbox2').click(function() {
            //set localstorage when click on proxy No = Admin yes/no selection not saving
            localStorage.setItem("admin_proxy", "No");
            console.log('changed to No')
            $('body#post-35458 .permissions-section .employee_level p').removeClass('yes_proxy_text').addClass('no_proxy_text')
            /*localStorage.removeItem("profileSelected"); */

            $('#admin-modals #admin_four_proxy_no_orangeButton').css('display','block');
            $('#admin-modals #admin_four_proxy_orangeButton, #four_custom_insuranceModal2 #orangeButton').hide();
            $('#four_custom_permissionApplyModal .manager_tab_btn').prev('li').show();
            $('#four_custom_lastpermissionApplyModal .tabs').find('li').eq(3).show();
            $('#four_custom_lastpermissionApplyModal .owner_tab_btn').hide();

            $('#four_custom_lastpermissionApplyModal #custom_admin2 .main-checkbox, #four_custom_lastpermissionApplyModal #custom_admin2 .main-checkbox2, #four_custom_lastpermissionApplyModal #custom_admin2 .sub-checkbox, #four_custom_lastpermissionApplyModal #custom_admin2 .sub-checkbox2,#four_custom_lastpermissionApplyModal #custom_manager2 .main-checkbox, #four_custom_lastpermissionApplyModal #custom_manager2 .main-checkbox2, #four_custom_lastpermissionApplyModal #custom_manager2 .sub-checkbox, #four_custom_lastpermissionApplyModal #custom_manager2 .sub-checkbox2, #four_custom_lastpermissionApplyModal #custom_employees2 .main-checkbox, #four_custom_lastpermissionApplyModal #custom_employees2 .main-checkbox2, #four_custom_lastpermissionApplyModal #custom_employees2 .sub-checkbox, #four_custom_lastpermissionApplyModal #custom_employees2 .sub-checkbox2').parent().addClass('blue-bg');

              $('#four_custom_lastpermissionApplyModal #custom_admin2').find('input').prop('checked',false);  
              $('#four_custom_lastpermissionApplyModal #custom_admin2, #four_custom_lastpermissionApplyModal #custom_manager2, #four_custom_lastpermissionApplyModal #custom_employees2').find('input').attr("disabled", false); 

              $('#four_custom_insuranceModal2 .orangeButton').removeClass('disabled-button');

               //mobile preeti
             $('#four_custom_permissionApplyModal #custom_admin, #four_custom_permissionApplyModal #custom_manager, #four_custom_lastpermissionApplyModal #custom_manager2').removeClass('mobile_permission_preeti_yes');
             $('#four_custom_permissionApplyModal #custom_admin, #four_custom_permissionApplyModal #custom_manager, #four_custom_lastpermissionApplyModal #custom_manager2').addClass('mobile_permission_preeti_no')

        });

        $(document).on('click', '#employee_modal i', function() {
            var permission_text = $('body#post-35458 .permissions-section .employee_level p').text();        
            if(permission_text == "Employee"){
                // $('#four_custom_permissionApplyModal #custom_admin').find('input').prop('checked',true);
            } else if(permission_text == "Manager"){                
                $('body#post-35458 .permissions-section .employee_level p').removeClass('no_proxy_text')
            } 
        });   

        //get localstorage when click on proxy No = Admin yes/no selection not saving
        $(document).on('click', '#employee_modal i', function(){        
           if(localStorage.getItem("admin_proxy") == "Yes" || $('body#post-35458 .permissions-section .employee_level p').hasClass('yes_proxy_text')) { 
                $('#four_custom_insuranceModal2 #admin_four_proxy_no_orangeButton, #four_custom_insuranceModal2 #orangeButton').hide();
                $('#four_custom_insuranceModal2 #admin_four_proxy_orangeButton').show();
                $('#four_custom_insuranceModal2 #admin_four_proxy_orangeButton').removeClass('disabled-button');            
                $('#four_custom_insuranceModal2 .four_proxy-info .custom_proxy_checkbox1').prop('checked',true);          
                $('#four_custom_insuranceModal2 .four_proxy-info .custom_proxy_checkbox2').prop('checked',false);

           } else if(localStorage.getItem("admin_proxy") == "No" || $('body#post-35458 .permissions-section .employee_level p').hasClass('no_proxy_text')) {
                $('#four_custom_insuranceModal2 #admin_four_proxy_no_orangeButton, #four_custom_insuranceModal2 #orangeButton').hide();
                $('#four_custom_insuranceModal2 #admin_four_proxy_no_orangeButton').show();
                $('#four_custom_insuranceModal2 #admin_four_proxy_no_orangeButton').removeClass('disabled-button');
                $('#four_custom_insuranceModal2 .four_proxy-info .custom_proxy_checkbox1').prop('checked',false);          
                $('#four_custom_insuranceModal2 .four_proxy-info .custom_proxy_checkbox2').prop('checked',true);
           };
        })

        //checkbox JS functionalities same as Gmail checkbox  
        $('.records-checkbox .sub-checkbox').on('change', function() {
                const _ = this;
                const parent = $(this).closest('.main-parent');
                const checkboxes = parent.find('.sub-checkbox');
                const parentCheckbox = parent.find('.main-checkbox');
                //parentCheckbox.prop('checked', true);
                //console.log("checkboxes", checkboxes);
                const isChecked = [];
                checkboxes.each(function(i, el) {
                    if ($(el).is(":checked")) {
                        isChecked.push(true);
                    } else {
                        isChecked.push(false);
                    }
                });
                //console.log('isChecked', isChecked);
                if (isChecked.every(check => check === true)) {
                    parentCheckbox.removeClass('straight-line')
                } else {
                    parentCheckbox.addClass('straight-line')
                }

                if (isChecked.every(check => check === false)) {
                    $(this).closest('.name-info').siblings('.name-info.select-border').find('.records-checkbox input').prop('checked',false);
                    $(this).closest('.name-info').siblings('.name-info.select-border').find('.pay-checkbox input').prop('checked',false)
                }

                 //=> check condition if sibling is checked ..
                 if($(this).prop('checked')==false && $(this).closest('.name-info').siblings('.name-info:not(".select-border")').find('.records-checkbox input').prop('checked')==false){
                    console.log('DONO false hh')
                    

                 } else {
                    //$(this).closest('.name-info').siblings('.name-info.select-border').find('.records-checkbox input').prop('checked',true);                
                 }

                 // if() {

                 // }

                //in 3 case record/pay uncheck with parent 
                var elems = $(this).closest('.name-info').siblings('.name-info:not(".select-border")').find('.pay-checkbox input');

                var sList;
                $(elems).each(function () {
                    sList = ""
                    sList += "(" + $(this).val() + "-" + (this.checked ? "checked" : "not checked") + ")";
                });
                if(sList=="(1-not checked)") {
                    console.log('SARE HAT GYEE PAY KEE');
                    $(this).closest('.name-info').siblings('.name-info.select-border').find('.pay-checkbox input').prop('checked',false)
                }
                //=> parent(main-checkbox2) input
        });


        $('.pay-checkbox .sub-checkbox2').on('change', function() {
                const _ = this;
                const parent = $(this).closest('.main-parent');
                const checkboxes = parent.find('.sub-checkbox2');
                const parentCheckbox = parent.find('.main-checkbox2');
                //parentCheckbox.prop('checked', true);
                //console.log("checkboxes", checkboxes);
                const isChecked = [];
                checkboxes.each(function(i, el) {
                    if ($(el).is(":checked")) {
                        isChecked.push(true);
                    } else {
                        isChecked.push(false);
                    }
                });
                //console.log('isChecked', isChecked);
                if (isChecked.every(check => check === true)) {
                    parentCheckbox.removeClass('straight-line')
                } else {
                    parentCheckbox.addClass('straight-line')
                }

                //in 3 case pay uncheck with parent 
                var elems = $(this).closest('.name-info').siblings('.name-info:not(".select-border")').find('.pay-checkbox input');

                var sList;
                $(elems).each(function () {
                    sList = ""
                    sList += "(" + $(this).val() + "-" + (this.checked ? "checked" : "not checked") + ")";
                });
                if(sList=="(1-not checked)") {
                    console.log('SARE HAT GYEE PAY KEE')
                    $(this).closest('.name-info').siblings('.name-info.select-border').find('.pay-checkbox input').prop('checked',false)

                }
                    

        });

        $('.pay-checkbox .sub-checkbox2').on('click', function() {
                const _ = this;
                const parent = $(this).closest('.main-parent');    //selecting main checkbox SELECT ALL
                const checkboxes2 = parent.find('.sub-checkbox'); 

                const isChecked = [];
                checkboxes2.each(function(i, el) {
                    if ($(el).is(":checked")) {
                        isChecked.push(true);
                    } else {
                        isChecked.push(false);
                    }
                });
               
                if (isChecked.every(check => check === true)) {
                     $('.main-checkbox').removeClass('straight-line')
                } else {
                    console.log('h');
                }
        });

      /*========================================== implement permission modal into profiles ============================================*/ 
       // var admin_obj = {
       //      tab : "Manager(s)",
       //      permissions: [
       //          {
       //              name: 'Burdett Anna',
       //              record: true,
       //              pay: false
       //          },
       //          {
       //              name: 'Owens Marvin',
       //              record: true,
       //              pay: false
       //          }     
       //      ]


       // } 



      /*===== from Permission Modal - implement permission modal into profiles =====*/ 
      /*=== input chekcbox ===*/ 
      var admin_lists_records = $('input.sub-checkbox2');    // All the checkboxes inside the modal popup(including hidden)
      let permissions_section;

      // ID and Name of all the details in the who can see and who this employee see modal popup

      const tabsId = [
            {
                id: '#custom_owner',
                name: 'Owner'
            },
            {
                id: '#custom_admin',
                name: 'Admin(s)'
            },
            {
                id: '#custom_manager',
                name: 'Manager(s)'
            },
            {
                id: '#custom_admin2',
                name: 'Admin&#40;&#115;&#41;'
            },
            {
                id: '#custom_manager2',
                name: 'Manager&#40;&#115;&#41'
            },
            {
                id: '#custom_employees2',
                name: 'Employee(s)'
            }
        ];


      $('#four_custom_insuranceModal2 .orangeButton').click(function(){        //first modal popup Next button click
            const roleLevelSelect = $('#roleLevelSelect option:selected');   // get the selected level from select dropdown
            // var tabsContent = $('.tabs-content');
            
            // var name_text =  $(tabsContent).closest('.name-info').find('p').text();    
            // var records_parent =  $(tabsContent).closest('.right').find('.records-checkbox input').prop('checked');    
            // var pay_parent =  $(tabsContent).closest('.right').find('.pay-checkbox input').prop('checked'); 

            // console.log('tabsContent', tabsContent);
            // console.log('records_parent', records_parent);
            // console.log('pay_parent', pay_parent);
            // console.log('modal select dropdown,',roleLevelSelect.text())
            permissions_section = [{
                role: roleLevelSelect.text(),
                tabs: []
            }];
            for(var i=0; i < tabsId.length; i++) {
                let tabsObj = {
                    tab: tabsId[i].name,
                    tabId: tabsId[i].id,
                    permission: []
                }
                //console.log(tabsId[i])
                const nameInfo = $(tabsId[i].id).find('.name-info:not(.select-border)');        //all the rows in checkboxes except SELECT ALL rows
                for(let j = 0; j < nameInfo.length; j++) {              

                    var name_text =  $(nameInfo[j]).find('p').text();    
                    var records_parent =  $(nameInfo[j]).find('.records-checkbox input').prop('checked');    
                    var pay_parent =  $(nameInfo[j]).find('.pay-checkbox input').prop('checked'); 

                    let permissionObj = {
                        name : name_text,
                        records_checkbox : records_parent ? true : false,
                        pay_checkbox : pay_parent ? true : false
                  }
                  tabsObj.permission.push(permissionObj)
                }
                  permissions_section[0].tabs.push(tabsObj);
            }

            console.log(`%cselected level`, 'color: #229954;', permissions_section);


      });  

      admin_lists_records.on('change', function() {  // All the checkboxes in the modal popup of permissions


            var checkbox_parents =  $(this).closest('.main-parent'); 
            // var tab_text  =  $('#four_custom_permissionApplyModal').find('.tab a.active').text(); 
            var name_text =  $(this).closest('.name-info').find('p').text();    
            var records_parent =  $(this).closest('.right').find('.records-checkbox input').prop('checked');    
            var pay_parent =  $(this).closest('.right').find('.pay-checkbox input').prop('checked');    
            var currentTab;

            // console.log("666", name_text, records_parent, pay_parent);

            tabsId.forEach((el) => {
                // console.log("tabsId", el.id, "checkbox_parents.id", ('#' + checkbox_parents.attr('id')));
                if(el.id == ('#' + checkbox_parents.attr('id'))) {
                   currentTab =  el.name;
                }
            })
            console.log("%ccurrentTab", currentTab, "color: #2980B9");
           
            permissions_section[0].tabs.forEach((el) => {
                // console.log('permissions_section', el.tab, "el.permission", el.permission, records_parent);

                //changing the data of the permission section on change of checkboxes

                if(el.tab == currentTab) {
                   el.permission.forEach((el) => {
                     //debugger;
                        if(el.name == name_text) {
                            el.records_checkbox =  records_parent ? true : false;
                            el.pay_checkbox = pay_parent ? true : false;

                            //console.log('el.name =>', el.name, 'name_text =>' name_text)
                        } 

                        else if(name_text === 'SELECT ALL') {
                            el.records_checkbox =  records_parent ? true : false;
                            el.pay_checkbox = pay_parent ? true : false;                        
                        }

                        // else {
                        //     el.records_checkbox =  $(this).parents('.main-parent:visible').find('.main-checkbox').prop('checked') ? true : false;
                        //     el.pay_checkbox = $(this).parents('.main-parent:visible').find('.main-checkbox2').prop('checked') ? true : false;
                        // }
                        // el.records_checkbox =  records_parent ? true : false;
                        // el.pay_checkbox = pay_parent ? true : false;
                   });
                } 
            })

           // let name_info_section = {
           //    tab : tab_text,
           //    permission : [{
           //          name : name_text,
           //          records_checkbox : records_parent ? true : false,
           //          pay_checkbox : pay_parent ? true : false
           //    }]
           // }; 

           // permissions_section.push(name_info_section);
           // console.log(permissions_section);        

           console.log("onchange",permissions_section)

      });     // on change checkboxes ends here


        const selectAllCheckboxCheck = () =>{
            permissions_section[0].tabs.forEach(elem=>{
            //   console.log(elem.tabId);

            const levelId = elem.tabId;
            let count=0;
              elem.permission.forEach(val=>{

                const result = val.pay_checkbox && val.records_checkbox;

                if(result){
                    count+=1;
                }
              })
              console.log(elem.permission.length, 'total selected:', count)
              if(elem.permission.length===count){
                  const mainSelectCheckbox = document.querySelector(levelId).getElementsByClassName('main-checkbox');
                  const mainSelectCheckbox2 = document.querySelector(levelId).getElementsByClassName('main-checkbox2');

                  mainSelectCheckbox.forEach(elem=>{
                    //   console.log(elem)
                      elem.classList.remove('straight-line');
                  })
                  mainSelectCheckbox2.forEach(elem=>{
                    //   console.log(elem)
                      elem.classList.remove('straight-line');
                  })
              }

            //   console.log(elem.permission.length, 'count:',count)
            //   console.log(`%c${recordCount} and ${payCount}`, "color: #F318AD;")
          })
        }
      //Fix the checkbox issue
      document.querySelector('.manager_level2.admin_level2.orangeButton.modal-close').addEventListener('click',()=>{
          console.log('Now to fix the checkbox issue 2',permissions_section)
          selectAllCheckboxCheck();
          
      })
      document.querySelector('#four_custom_insuranceModal2 #orangeButton').addEventListener('click',()=>{
          console.log('Now to fix the checkbox issue 1',permissions_section)
          selectAllCheckboxCheck();
          
      })


      $('.permission-done-btn').click(function(){       // final modal popup done button  
            console.log('%cpermissions_section done','color: #CA6F1E;', permissions_section);
            var tempDesig = localStorage.getItem('temp_designation_level')

            var tempAdminProxy = localStorage.getItem('temp_admin_aproxy')


            localStorage.setItem('admin_proxy', tempAdminProxy);

            localStorage.setItem('designation_level', tempDesig);

            if(localStorage.getItem('designation_level')!='Admin_designation_level'){
                $('body#post-35458 .permissions-section .employee_level p').removeClass('yes_proxy_text')
                // setTimeout(()=>{ $('.more-permission.profile3-part').hide()},200)
            }


            $('.who_can_see_section, .more-permission').empty();
            $('.who_can_see_section').prepend('<h3 class="cedr-blue-font beneTitle">Who can see this employee?</h3>'); 
            $('.more-permission').prepend('<h3 class="cedr-blue-font beneTitle">Who can this employee see?</h3>');       
            const employee_level = $('.employee_level p');
            employee_level.text(permissions_section[0].role);
            if(permissions_section[0].role!='Admin'){
                $('.employee_level p').removeClass('yes_proxy_text')   //removing proxy 
            }
            permissions_section[0].tabs.forEach(tabObj => {
                let havePermission = false;
                let permissionData;
                if(permissions_section[0].role!='Admin'){
                    if(tabObj.tabId!="#custom_admin2"){
                    permissionData = `<div class="col s6"><b class="cedr-blue-font">${tabObj.tab}</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div>`;
                    permissionData += '<div>';
                    }
                }
                else if(permissions_section[0].role==='Admin'){
                    permissionData = `<div class="col s6"><b class="cedr-blue-font">${tabObj.tab}</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div>`;
                    permissionData += '<div>';
                }
                // console.log("sss", tabObj);
                if(permissions_section[0].role!='Admin'){
                    if(tabObj.tabId!="#custom_admin2"){
                        tabObj.permission.forEach(permissionObj => {
                            if(!permissionObj.records_checkbox && !permissionObj.pay_checkbox) {
                            } 
                            else {
                                havePermission = true;
                                permissionData += `<div class="col s6">
                                              <p>${permissionObj.name}</p>
                                            </div>
                                            <div class="col s6">`;
                                    if(permissionObj.records_checkbox) {
                                        permissionData += `<div class="records-checkbox">
                                            <input name="eedi2" type="checkbox" checked  disabled>
                                            <label for=""></label>
                                        </div>`;
                                    } 
                                    else {
                                        permissionData += `<div class="records-checkbox">
                                            <input name="eedi2" type="checkbox" disabled>
                                            <label for=""></label>
                                        </div>`;
                                    }
                                    if(permissionObj.pay_checkbox) {
                                        permissionData += `<div class="pay-checkbox">
                                            <input name="eedi2" type="checkbox" disabled checked>
                                            <label for=""></label>
                                        </div>`;
                                    } 
                                    else {
                                        permissionData += `<div class="pay-checkbox">
                                            <input name="eedi2" type="checkbox" disabled > 
                                            <label for=""></label>
                                        </div>`;
                                    }
                                    permissionData += `</div>`;

                        

                            }
                        });
                        permissionData += '</div><div class="horzDivider w90"></div>';
                        }
                }
                else if(permissions_section[0].role==='Admin'){
                    tabObj.permission.forEach(permissionObj => {
                            if(!permissionObj.records_checkbox && !permissionObj.pay_checkbox) {
                            } 
                            else {
                                havePermission = true;
                                permissionData += `<div class="col s6">
                                              <p>${permissionObj.name}</p>
                                            </div>
                                            <div class="col s6">`;
                                    if(permissionObj.records_checkbox) {
                                        permissionData += `<div class="records-checkbox">
                                            <input name="eedi2" type="checkbox" checked  disabled>
                                            <label for=""></label>
                                        </div>`;
                                    } 
                                    else {
                                        permissionData += `<div class="records-checkbox">
                                            <input name="eedi2" type="checkbox" disabled>
                                            <label for=""></label>
                                        </div>`;
                                    }
                                    if(permissionObj.pay_checkbox) {
                                        permissionData += `<div class="pay-checkbox">
                                            <input name="eedi2" type="checkbox" disabled checked>
                                            <label for=""></label>
                                        </div>`;
                                    } 
                                    else {
                                        permissionData += `<div class="pay-checkbox">
                                            <input name="eedi2" type="checkbox" disabled > 
                                            <label for=""></label>
                                        </div>`;
                                    }
                                    permissionData += `</div>`;

                        

                            }
                        });
                        permissionData += '</div><div class="horzDivider w90"></div>';
                }
                
                

                if(havePermission) {
                    if(tabObj.tabId == '#custom_admin2' || tabObj.tabId == '#custom_manager2' || tabObj.tabId == '#custom_employees2') {
                         $('.more-permission').show();
                         if(permissionData){
                             console.log(permissionData)
                            $('.more-permission').append(permissionData);
                         }
                        
                        if(!(localStorage.getItem('designation_level')==='Admin_designation_level')){
                            console.log('remove proxy')
                            setTimeout(()=>{$('body#post-35458 .permissions-section .employee_level p').removeClass('yes_proxy_text')}, 200)
                        }
                        console.log('tabObj.tabId - yeee hhhh', tabObj.tabId)

                        if(localStorage.getItem('designation_level')==='Employee_designation_level'){
                            console.log('manager Level to remove the employee')
                            $('.benes.permissions-section .more-permission.profile3-part').hide();
                        }

                        else if(localStorage.getItem('designation_level')==='Manager_designation_level'){
                            console.log('manager Level to remove the admin')
                            var allCheckBoxes = document.querySelectorAll('div#four_custom_lastpermissionApplyModal #custom_manager2 input[type="checkbox"]');
                            var count=0;
                            for(i=0;i<allCheckBoxes.length;i++){
                                selected = allCheckBoxes[i].checked;
                                // console.log(allCheckBoxes[i])
                                // console.log(selected)
                                if(selected){
                                    count+=1;
                                }
                            }

                            if(count===0){
                                $('.profile3-part').hide();
                                console.log('no one selected')
                            }
                           
                            
                        }
                    } 
                    else {
                        $('.who_can_see_section').append(permissionData);

                        // console.log('data',permissionData)

                       
                        // console.log('tabObj.tabId - yeee else vala  hhhh', tabObj.tabId)
                    }
                }   
            })
        
     });
     

       
   $('.beneButton#employee_modal').click(function(){
       $('.manager_level').hide();
       $('#custom_admin').hide();

       


       $('.back-btn.profile_1_2_3_4_6').click(function(){

            console.log('CLICKED TO RESET')

            $('select#roleLevelSelect').on('change', function(){
                console.log('CLICKED TO RESET')
                const level = $('select#roleLevelSelect option:selected').text()
                console.log(level)

                switch(level){
                    case 'Employee': 
                        for_employee_selection();
                        $('#four_custom_insuranceModal2 .orangeButton').click(function(){
                            selectAllCheckboxCheck();
                        });
                        
                        console.log('%cemployee resets', 'color: #f00;')
                        break;
                    case 'Manager': 
                        for_manager_selection();
                        $('#four_custom_insuranceModal2 .orangeButton').click(function(){
                            selectAllCheckboxCheck();
                        });
                        console.log('%cmanager resets', 'color: #f00;')
                        break;
                    case 'Admin': 
                        four_admin_selection();
                        $('#four_custom_insuranceModal2 .orangeButton').click(function(){
                            selectAllCheckboxCheck();
                        });
                        console.log('%cadmin resets', 'color: #f00;')
                        break;
                }
                
            })
        })


       var selectedProxy = localStorage.getItem('admin_proxy')
       var selectedesig = localStorage.getItem('designation_level')
       if(!selectedProxy || selectedProxy==='No'){
            localStorage.setItem('temp_admin_aproxy','No')
           setTimeout(() => {
                $('#four_custom_insuranceModal2 input#proxy4.proxy_checkbox').prop('checked',true )
           }, 200);
       }
       
        localStorage.setItem('temp_designation_level',selectedesig)



        $('#admin-modals .four_proxy-info .custom_proxy_checkbox2').click(function(){
            localStorage.setItem('temp_admin_aproxy','No')
        })
        $('#admin-modals .four_proxy-info .custom_proxy_checkbox1').click(function(){
            localStorage.setItem('temp_admin_aproxy','Yes')
        })

        


       //permission modal level select on behalf of default level text
       var mobile_bottom_permission_level = $('body#post-35458 .permissions-section .employee_level p').text();        
       switch(mobile_bottom_permission_level) {            
            case "Employee":
                $('#four_custom_insuranceModal2 select').prop('selectedIndex',0);
                $('#admin-modals #orangeButton, #admin_four_proxy_orangeButton, #admin_four_proxy_no_orangeButton').hide();
                    $('#admin-modals #employee_orangeButton').show();
                    $('#admin-modals .four_proxy-info').hide();
                    $('.manager_level, .manager_level2').hide();
                    $('.manager_level2').siblings('.orangeButton').show();
                    $('#admin-modals .button1_modal .four_proxy-info .proxy_checkbox').prop('checked',false);
                    // $('#four_custom_permissionApplyModal #custom_admin').find('input').prop('checked',false);
                    $('#four_custom_insuranceModal2 .orangeButton').removeClass('disabled-button');
                    $('.manager_tab_btn').show();
                break;
            case "Manager":
                $('#four_custom_insuranceModal2 select').prop('selectedIndex',1);
                $('.manager_tab_btn').show();
                $('#admin-modals #orangeButton').css('display','block');
                $('#admin-modals .four_proxy-info, #admin-modals #employee_orangeButton, #admin_four_proxy_orangeButton, #admin_four_proxy_no_orangeButton').hide();
                $('.admin_tab_btn, .owner_tab_btn').hide();
                $('.admin_tab_btn').siblings('li').children().removeClass('active');
                $('#admin-modals .manager_level.active').siblings('span.active').removeClass('active');
                $('.manager_level').css("display", "inline-block");
                $('.manager_level2').css("display", "block");
                $('.manager_level2').siblings('.orangeButton').hide();
                $('#admin-modals .four_proxy-info .proxy_checkbox').prop('checked',false);

                // $('#four_custom_permissionApplyModal #custom_admin').find('input').prop('checked',true);
                var permission_owner_tab = $('#four_custom_permissionApplyModal .tabs li.tab').eq(0).children().attr('href');            
                $(permission_owner_tab).show();
                $(permission_owner_tab).siblings().hide()

                $('#four_custom_permissionApplyModal .tabs li.tab').eq(0).children().addClass('active');
                $('#four_custom_permissionApplyModal .tabs li.tab').eq(0).siblings().children().removeClass('active');
                $('#four_custom_permissionApplyModal .tabs li.tab a, #four_custom_lastpermissionApplyModal .tabs li.tab a').click(function(){
                    $(this).addClass('active');
                    $(this).parent().siblings('li').find('a').removeClass('active');
                    var other_tab = $(this).attr('href');            
                    $(other_tab).show();
                    $(other_tab).siblings().hide()  
                });

                //back-btn - start back up to top section
                $('#four_custom_lastpermissionApplyModal .back-btn').click(function() {
                       $('#four_custom_permissionApplyModal .tabs li.tab').eq(0).children().addClass('active');
                       $('#four_custom_permissionApplyModal .tabs li.tab').eq(0).siblings().children().removeClass('active'); 
                       $(permission_owner_tab).show();
                       $(permission_owner_tab).siblings().hide()    
                })

                //back-btn - start back up to top section
                $('#four_custom_permissionApplyModal .orangeButton').click(function() {
                    $('#four_custom_lastpermissionApplyModal .tabs li.tab').eq(2).children().addClass('active');
                    $('#four_custom_lastpermissionApplyModal .tabs li.tab').eq(2).siblings().children().removeClass('active');
                    var last_manager_tab = $('#four_custom_lastpermissionApplyModal .tabs li.tab').eq(2).children().attr('href');  
                    $(last_manager_tab).show();
                    $(last_manager_tab).siblings().hide() 
                })

                $('#four_custom_lastpermissionApplyModal .tabs li.tab').eq(1).children().addClass('active');
                $('#four_custom_lastpermissionApplyModal .admin_tab_btn').next('li').children('a').addClass('active');
                $('#four_custom_lastpermissionApplyModal #custom_admin2 .main-checkbox, #four_custom_lastpermissionApplyModal #custom_admin2 .main-checkbox2, #four_custom_lastpermissionApplyModal #custom_admin2 .sub-checkbox, #four_custom_lastpermissionApplyModal #custom_admin2 .sub-checkbox2, #four_custom_lastpermissionApplyModal #custom_manager2 .main-checkbox, #four_custom_lastpermissionApplyModal #custom_manager2 .main-checkbox2, #four_custom_lastpermissionApplyModal #custom_manager2 .sub-checkbox, #four_custom_lastpermissionApplyModal #custom_manager2 .sub-checkbox2, #four_custom_lastpermissionApplyModal #custom_employees2 .main-checkbox, #four_custom_lastpermissionApplyModal #custom_employees2 .main-checkbox2, #four_custom_lastpermissionApplyModal #custom_employees2 .sub-checkbox, #four_custom_lastpermissionApplyModal #custom_employees2 .sub-checkbox2').parent().addClass('blue-bg');
                $('#four_custom_lastpermissionApplyModal #custom_admin2, #four_custom_lastpermissionApplyModal #custom_manager2, #four_custom_lastpermissionApplyModal #custom_employees2').find('input').attr("disabled", false);

                $('#four_custom_insuranceModal2 .orangeButton').removeClass('disabled-button');

                //10b) The Manager default settings are not correct on profiles 3, 4, and 6:
                // $('#four_custom_lastpermissionApplyModal #custom_manager2, #four_custom_lastpermissionApplyModal #custom_employees2').find('input').prop('checked',false)

                break;
            case "Admin":
                $('#four_custom_insuranceModal2 select').prop('selectedIndex',2);  
                four_admin_selection();    
                console.log('adminnn hai')
                console.log('set to default')

                // $('.permissionModal .custom_proxy_checkbox1').click(function(){
                    
                // })


                

                // .permissionModal .custom_proxy_checkbox2
                // var adminProxyCheck = localStorage.getItem('admin_proxy')
                // if(!adminProxyCheck && adminProxyCheck==='No'){
                //     $('.permissionModal .custom_proxy_checkbox2').prop('checked',true)   
                // }
                           
                $('#admin-modals .four_proxy-info').show();
                if(localStorage.getItem("profileSelected") == "3_4" || $('body#post-35458 .permissions-section .employee_level p').hasClass('no_proxy_text')){      
                     $('#admin-modals .four_proxy-info .custom_proxy_checkbox1').prop('checked',false); 
                     $('#admin-modals .four_proxy-info .custom_proxy_checkbox2').prop('checked',true);
                     $('#admin-modals #admin_four_proxy_no_orangeButton').css('display','block');
                     $('#admin-modals #admin_four_proxy_orangeButton, #four_custom_insuranceModal2 #orangeButton').hide();  
                } else if(localStorage.getItem("profileSelected") == "6" || $('body#post-35458 .permissions-section .employee_level p').hasClass('yes_proxy_text')) {
                     $('#four_custom_permissionApplyModal .manager_tab_btn').prev('li').hide(); 
                     $('#admin-modals .four_proxy-info .custom_proxy_checkbox1').prop('checked',true);
                     $('#admin-modals .four_proxy-info .custom_proxy_checkbox2').prop('checked',false);
                     $('#admin-modals #admin_four_proxy_orangeButton').css('display','block');
                     $('#admin-modals #admin_four_proxy_no_orangeButton, #four_custom_insuranceModal2 #orangeButton').hide();

                     //profile 6 Proxy yes all level selected & gray by default
                     $('#four_custom_lastpermissionApplyModal #custom_admin2 input').prop('checked',true);
                     $('#four_custom_lastpermissionApplyModal #custom_admin2 input, #four_custom_lastpermissionApplyModal #custom_manager2 input, #four_custom_lastpermissionApplyModal #custom_employees2 input').attr("disabled", true);
                     $('#four_custom_lastpermissionApplyModal #custom_admin2 input, #four_custom_lastpermissionApplyModal #custom_manager2 input, #four_custom_lastpermissionApplyModal #custom_employees2 input').parent().removeClass('blue-bg');
                }else {
                     $('#four_custom_insuranceModal2 .orangeButton').addClass('disabled-button');
                    //  $('#four_custom_insuranceModal2 #orangeButton').css('display','block');
                     $('#four_custom_insuranceModal2 #orangeButton').css('display','block').removeClass('disabled-button');
                }

                // $('#four_custom_insuranceModal2 .orangeButton').addClass('disabled-button');
                // $('#four_custom_insuranceModal2 #orangeButton').css('display','block');      
                //$('#admin-modals #employee_orangeButton').hide();
                break;
       }  


   })
    
      $('body#post-35458 #profile5_btn').click(function () {     
              //$('.profile2-part, .profile3-part').fadeOut();
              $('.profile5-part').fadeIn();
              $('select#designation_level').val('1')
              $('body').addClass('profile5_disables');
              $('.payRate .currentPayWrapper').addClass('hide'); 
              $('.payRate .default_historyWrapper').removeClass('hide');     

              $('body#post-35458 .permissions-section .employee_level p').text('Employee');  

               $('.who_can_see_section, .more-permission').empty();
            //Who can see this employee?
            $('.who_can_see_section').html('<h3 class="cedr-blue-font beneTitle">Who can see this employee?</h3><div class="col s6"><b class="cedr-blue-font">Owner</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Pitteroff, Phillip</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div><div class="horzDivider w90"></div>');
            //Who can this employee see?    
            /*$('.more-permission').show();                   
            $('.more-permission').html('<h3 class="cedr-blue-font beneTitle">Who can this employee see?</h3><div class="col s6"><b class="cedr-blue-font">Manager(s)</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Burdett, Anna</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Owens, Marvin</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div><div class="horzDivider w90"></div><div class="col s6"><b class="cedr-blue-font">Employee(s)</b></div><div class="col s6"> <label class="records">Records</label> <label class="pay">Pay</label></div><div><div class="col s6"><p>Caralenno, Maria</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Hart, Michael</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div><div class="col s6"><p>Howard, Katherine</p></div><div class="col s6"><div class="records-checkbox"><input name="eedi2" type="checkbox" checked="" disabled=""><label for=""></label></div><div class="pay-checkbox"><input name="eedi2" type="checkbox" disabled="" checked=""><label for=""></label></div></div></div><div class="horzDivider w90"></div>');*/
        });   
       

    $('#four_custom_permissionApplyModal .tabs li.tab a, #four_custom_lastpermissionApplyModal .tabs li.tab a').click(function(){
        $(this).addClass('active');
        $(this).parent().siblings('li').find('a').removeClass('active');
        var other_tab = $(this).attr('href');            
        $(other_tab).show();
        $(other_tab).siblings().hide();
    });

    /*== proxy info ==*/
    $('#admin-modals .four_proxy-info > b i.fa.fa-question-circle').hover(function(){
       $(this).siblings('.info').toggle();    
    })



    });    

    //new change - when click on cancel button & modal open again so owner selected
    $('.permission-done-btn, body#post-35458 #four_custom_permissionApplyModal .controlWrapper .cancelButton').click(function(){
        $('#custom_owner').show();
        $('#custom_admin, #custom_manager').hide();
        $('body#post-35458 #four_custom_permissionApplyModal .modal-content .tabs li.tab:first-child').find('a').addClass('active');
        $('body#post-35458 #four_custom_permissionApplyModal .modal-content .tabs li.tab:first-child').siblings().find('a').removeClass('active');
    })

    //get localstorage when click on proxy No = Admin yes/no selection not saving
     $('#four_custom_permissionApplyModal, #four_custom_lastpermissionApplyModal').on('click', '.permission-done-btn', function(){     
        if(localStorage.getItem("admin_proxy") == "Yes") {
           $('body#post-35458 .permissions-section .employee_level p').addClass('yes_proxy_text');
        } else if(localStorage.getItem("admin_proxy") == "No") {
           $('body#post-35458 .permissions-section .employee_level p').removeClass('yes_proxy_text no_proxy_text');            
        }
        localStorage.removeItem("profileSelected")
    })

    //Edit Employee - Bug in Permissions Selections
    //When select Employee Level & Manager Level => Manager tabs & Admin tabs = Permisssion Apply Modal 
    // $('#four_custom_permissionApplyModal').on('change', '#custom_manager input.sub-checkbox2:not(".straight-line")', function(){
    //     $('#four_custom_permissionApplyModal #custom_admin .records-checkbox input.main-checkbox').prop('checked',true);
    // })

    //when select Manager Level => Manager/Employee tabs & Admin tabs = Last Permisssion Apply Modal 
    //8b) Select All on Manager Modal not working: https://www.screencast.com/t/1ONI0A4k5


    // $('#four_custom_lastpermissionApplyModal').on('change', '#custom_manager2 input.sub-checkbox2:not(".straight-line"), #custom_employees2 input.sub-checkbox2:not(".straight-line")', function(){
    //     $('#four_custom_permissionApplyModal #custom_admin input.main-checkbox').prop('checked',true); 
    // })

    //when select Admin Level => Admin tabs & Manager/Employee tabs = Last Permisssion Apply Modal 
    // $('#four_custom_lastpermissionApplyModal').on('change', '#custom_admin2 input.sub-checkbox2:not(".straight-line")', function(){
    //     $('#four_custom_lastpermissionApplyModal #custom_manager2 input.main-checkbox, #four_custom_lastpermissionApplyModal #custom_employees2 input.main-checkbox').prop('checked',true);
    // })

    //click on warning modal cancel button remove admin_proxy from strorage
    // $('#four_custom_warningModal, #four_custom_insuranceModal2, #four_custom_permissionApplyModal, #four_custom_lastpermissionApplyModal, #four_proxy_error_Modal').on('click', 'a.cancelButton', function(){
    //     localStorage.removeItem("admin_proxy");                 
    // })

    //This bug still exists on the Admin dropdowns on all of the following: Add EE, Edit EE 1, Edit EE 2, Edit EE 3, Edit EE 4, Edit EE 6.
    // $('#four_custom_permissionApplyModal').on('change', '#custom_admin input.sub-checkbox2:not(".straight-line")', function(){
    //     $('#four_custom_lastpermissionApplyModal #custom_manager2 .records-checkbox input.main-checkbox, #four_custom_lastpermissionApplyModal #custom_employees2 .records-checkbox input.main-checkbox').prop('checked',true);
    // })




    //carry the level selection to view advanced = Permission Modal level
    //Mobile View
    if ($(window).width() < 1368) {  
         $('.beneButton#employee_modal').click(function() { 
            //3) Horizontal & Vertical. Edit Info: On ALL profiles/ALL types of employees, Reset on "Cancel". https://www.screencast.com/t/r5WXcywjdWS9
            //2nd scenario
            if($('body#post-35458 .permissions-section .employee_level p').text() == "Employee") {
                if($('div:not(".profile8") .who_can_see_section .horzDivider.w90 + .col.s6 > b').text().length <= 16){
                    $('#custom_manager').find('input').prop('checked',false)
                } 
            }


            var designation_name = localStorage.getItem('designation_level');
             //on behalf of localstorage  ============================   
             switch(designation_name) { 

            case "Employee_designation_level": 
                    $('#four_custom_insuranceModal2 select').prop('selectedIndex',0);
                    $('#admin-modals #orangeButton, #admin_four_proxy_orangeButton, #admin_four_proxy_no_orangeButton').hide();
                    $('#admin-modals #employee_orangeButton').show();
                    $('#admin-modals .four_proxy-info').hide();
                    $('.manager_level, .manager_level2').hide();
                    $('.manager_level2').siblings('.orangeButton').show();
                    $('#admin-modals .button1_modal .four_proxy-info .proxy_checkbox').prop('checked',false);
                    // $('#four_custom_permissionApplyModal #custom_admin').find('input').prop('checked',false);
                    $('#four_custom_insuranceModal2 .orangeButton').removeClass('disabled-button');
                    $('.manager_tab_btn').show();
  

                    
                    break;
            case "Manager_designation_level":
                $('#four_custom_insuranceModal2 select').prop('selectedIndex',1);
                $('.manager_tab_btn').show();
                $('#admin-modals #orangeButton').css('display','block');
                $('#admin-modals .four_proxy-info, #admin-modals #employee_orangeButton, #admin_four_proxy_orangeButton, #admin_four_proxy_no_orangeButton').hide();
                $('.admin_tab_btn, .owner_tab_btn').hide();
                $('.admin_tab_btn').siblings('li').children().removeClass('active');
                $('#admin-modals .manager_level.active').siblings('span.active').removeClass('active');
                $('.manager_level').css("display", "inline-block");
                $('.manager_level2').css("display", "block");
                $('.manager_level2').siblings('.orangeButton').hide();
                $('#admin-modals .four_proxy-info .proxy_checkbox').prop('checked',false);

                // $('#four_custom_permissionApplyModal #custom_admin').find('input').prop('checked',true);
                var permission_owner_tab = $('#four_custom_permissionApplyModal .tabs li.tab').eq(0).children().attr('href');            
                $(permission_owner_tab).show();
                $(permission_owner_tab).siblings().hide()

                $('#four_custom_permissionApplyModal .tabs li.tab').eq(0).children().addClass('active');
                $('#four_custom_permissionApplyModal .tabs li.tab').eq(0).siblings().children().removeClass('active');
                $('#four_custom_permissionApplyModal .tabs li.tab a, #four_custom_lastpermissionApplyModal .tabs li.tab a').click(function(){
                    $(this).addClass('active');
                    $(this).parent().siblings('li').find('a').removeClass('active');
                    var other_tab = $(this).attr('href');            
                    $(other_tab).show();
                    $(other_tab).siblings().hide()  
                });

                //back-btn - start back up to top section
                $('#four_custom_lastpermissionApplyModal .back-btn').click(function() {
                       $('#four_custom_permissionApplyModal .tabs li.tab').eq(0).children().addClass('active');
                       $('#four_custom_permissionApplyModal .tabs li.tab').eq(0).siblings().children().removeClass('active'); 
                       $(permission_owner_tab).show();
                       $(permission_owner_tab).siblings().hide()    
                })

                //back-btn - start back up to top section
                $('#four_custom_permissionApplyModal .orangeButton').click(function() {
                    $('#four_custom_lastpermissionApplyModal .tabs li.tab').eq(2).children().addClass('active');
                    $('#four_custom_lastpermissionApplyModal .tabs li.tab').eq(2).siblings().children().removeClass('active');
                    var last_manager_tab = $('#four_custom_lastpermissionApplyModal .tabs li.tab').eq(2).children().attr('href');  
                    $(last_manager_tab).show();
                    $(last_manager_tab).siblings().hide() 
                })

                $('#four_custom_lastpermissionApplyModal .tabs li.tab').eq(1).children().addClass('active');
                $('#four_custom_lastpermissionApplyModal .admin_tab_btn').next('li').children('a').addClass('active');
                $('#four_custom_lastpermissionApplyModal #custom_admin2 .main-checkbox, #four_custom_lastpermissionApplyModal #custom_admin2 .main-checkbox2, #four_custom_lastpermissionApplyModal #custom_admin2 .sub-checkbox, #four_custom_lastpermissionApplyModal #custom_admin2 .sub-checkbox2, #four_custom_lastpermissionApplyModal #custom_manager2 .main-checkbox, #four_custom_lastpermissionApplyModal #custom_manager2 .main-checkbox2, #four_custom_lastpermissionApplyModal #custom_manager2 .sub-checkbox, #four_custom_lastpermissionApplyModal #custom_manager2 .sub-checkbox2, #four_custom_lastpermissionApplyModal #custom_employees2 .main-checkbox, #four_custom_lastpermissionApplyModal #custom_employees2 .main-checkbox2, #four_custom_lastpermissionApplyModal #custom_employees2 .sub-checkbox, #four_custom_lastpermissionApplyModal #custom_employees2 .sub-checkbox2').parent().addClass('blue-bg');
                $('#four_custom_lastpermissionApplyModal #custom_admin2, #four_custom_lastpermissionApplyModal #custom_manager2, #four_custom_lastpermissionApplyModal #custom_employees2').find('input').attr("disabled", false);

                $('#four_custom_insuranceModal2 .orangeButton').removeClass('disabled-button');

                //10b) The Manager default settings are not correct on profiles 3, 4, and 6:
                // $('#four_custom_lastpermissionApplyModal #custom_manager2, #four_custom_lastpermissionApplyModal #custom_employees2').find('input').prop('checked',false)
            break;

            case "Admin_designation_level": 
                    $('#four_custom_insuranceModal2 select').prop('selectedIndex',2);  
                    //four_admin_selection();               

                    //four-admin-selection function
                    $('#four_custom_permissionApplyModal .manager_tab_btn').prev('li').show();            
                    $('.manager_tab_btn, .owner_tab_btn, #admin-modals #employee_orangeButton, #admin_four_proxy_orangeButton, #admin_four_proxy_no_orangeButton').hide();
                    $('.admin_tab_btn, #admin-modals #orangeButton').show();  
                    //$('#admin-modals #orangeButton').css('display','block');
                    $('.admin_tab_btn').siblings('li').children().removeClass('active');
                    $('#admin-modals .manager_level.active').siblings('span.active').removeClass('active');
                    $('.admin_level').css("display", "inline-block");
                    $('.admin_level2').css("display", "block");
                    $('.admin_level2').siblings('.orangeButton').hide();
                    $('#admin-modals .four_proxy-info .proxy_checkbox').prop('checked',false);
                    


                    /*== four_custom_permissionApplyModal ==*/
                    $('#four_custom_permissionApplyModal #custom_admin').find('input').prop('checked',false);            
                    $('#four_custom_permissionApplyModal .tabs li.tab').eq(0).children().addClass('active');
                    $('#four_custom_permissionApplyModal .tabs li.tab').eq(0).siblings().children().removeClass('active');
                    var permission_owner_tab = $('#four_custom_permissionApplyModal .tabs li.tab').eq(0).children().attr('href');            
                    $(permission_owner_tab).show();
                    $(permission_owner_tab).siblings().hide()


                     /*== custom_lastpermissionApplyModal ==*/
                    $('#four_custom_lastpermissionApplyModal #custom_manager2, #four_custom_lastpermissionApplyModal #custom_employees2').find('input').prop('checked',true);
                    $('#four_custom_lastpermissionApplyModal .admin_tab_btn a').addClass('active')
                    $('#four_custom_lastpermissionApplyModal #custom_admin2').css("display", "block")
                    $('#four_custom_lastpermissionApplyModal #custom_manager2').hide();

                    var lastpermission_owner_tab = $('#four_custom_lastpermissionApplyModal .tabs li.tab').eq(1).children().attr('href');            
                    $(lastpermission_owner_tab).show();
                    $(lastpermission_owner_tab).siblings().hide()

                    $('#four_custom_permissionApplyModal .tabs li.tab a, #four_custom_lastpermissionApplyModal .tabs li.tab a').click(function(){
                        $(this).addClass('active');
                        $(this).parent().siblings('li').find('a').removeClass('active');
                        var other_tab = $(this).attr('href');            
                        $(other_tab).show();
                        $(other_tab).siblings().hide()                

                    });

                     //back-btn - start back up to top section
                    $('#four_custom_lastpermissionApplyModal .back-btn').click(function() {
                           $('#four_custom_permissionApplyModal .tabs li.tab').eq(0).children().addClass('active');
                           $('#four_custom_permissionApplyModal .tabs li.tab').eq(0).siblings().children().removeClass('active'); 
                           $(permission_owner_tab).show();
                           $(permission_owner_tab).siblings().hide();  
                    })

                    //back-btn - start back up to top section
                    $('#four_custom_permissionApplyModal .orangeButton').click(function() {
                        $('#four_custom_lastpermissionApplyModal .tabs li.tab').eq(1).children().addClass('active');
                        $('#four_custom_lastpermissionApplyModal .tabs li.tab').eq(1).siblings().children().removeClass('active');
                        var last_manager_tab = $('#four_custom_lastpermissionApplyModal .tabs li.tab').eq(1).children().attr('href');  
                        $(last_manager_tab).show();
                        $(last_manager_tab).siblings().hide(); 
                    })

                    $('#four_custom_lastpermissionApplyModal #custom_admin2 .main-checkbox, #four_custom_lastpermissionApplyModal #custom_admin2 .main-checkbox2, #four_custom_lastpermissionApplyModal #custom_admin2 .sub-checkbox, #four_custom_lastpermissionApplyModal #custom_admin2 .sub-checkbox2').parent().addClass('blue-bg');

                    $('#four_custom_lastpermissionApplyModal #custom_manager2 .main-checkbox, #four_custom_lastpermissionApplyModal #custom_manager2 .main-checkbox2, #four_custom_lastpermissionApplyModal #custom_manager2 .sub-checkbox, #four_custom_lastpermissionApplyModal #custom_manager2 .sub-checkbox2, #four_custom_lastpermissionApplyModal #custom_employees2 .main-checkbox, #four_custom_lastpermissionApplyModal #custom_employees2 .main-checkbox2, #four_custom_lastpermissionApplyModal #custom_employees2 .sub-checkbox, #four_custom_lastpermissionApplyModal #custom_employees2 .sub-checkbox2').parent().addClass('blue-bg');

                    $('#four_custom_lastpermissionApplyModal #custom_admin2, #four_custom_lastpermissionApplyModal #custom_manager2, #four_custom_lastpermissionApplyModal #custom_employees2').find('input').attr("disabled", false);
         
                    console.log('button disabled')
                    $('#four_custom_insuranceModal2 .orangeButton').removeClass('disabled-button');
                    $('.button1_modal #employee_orangeButton').addClass('disabled-button');
                    //four-admin-selection function

                    $('#admin-modals .four_proxy-info').show();
                    if(localStorage.getItem("profileSelected") == "3_4" || $('body#post-35458 .permissions-section .employee_level p').hasClass('no_proxy_text')){      
                         $('#admin-modals .four_proxy-info .custom_proxy_checkbox1').prop('checked',false); 
                         $('#admin-modals .four_proxy-info .custom_proxy_checkbox2').prop('checked',true);
                         $('#admin-modals #admin_four_proxy_no_orangeButton').css('display','block');
                         $('#admin-modals #admin_four_proxy_orangeButton, #four_custom_insuranceModal2 #orangeButton').hide();  
                    } else if(localStorage.getItem("profileSelected") == "6" || $('body#post-35458 .permissions-section .employee_level p').hasClass('yes_proxy_text')) {
                         $('#four_custom_permissionApplyModal .manager_tab_btn').prev('li').hide(); 
                         $('#admin-modals .four_proxy-info .custom_proxy_checkbox1').prop('checked',true);
                         $('#admin-modals .four_proxy-info .custom_proxy_checkbox2').prop('checked',false);
                         $('#admin-modals #admin_four_proxy_orangeButton').css('display','block');
                         $('#admin-modals #admin_four_proxy_no_orangeButton, #four_custom_insuranceModal2 #orangeButton').hide();

                         //profile 6 Proxy yes all level selected & gray by default
                         $('#four_custom_lastpermissionApplyModal #custom_admin2 input').prop('checked',true);
                         $('#four_custom_lastpermissionApplyModal #custom_admin2 input, #four_custom_lastpermissionApplyModal #custom_manager2 input, #four_custom_lastpermissionApplyModal #custom_employees2 input').attr("disabled", true);
                         $('#four_custom_lastpermissionApplyModal #custom_admin2 input, #four_custom_lastpermissionApplyModal #custom_manager2 input, #four_custom_lastpermissionApplyModal #custom_employees2 input').parent().removeClass('blue-bg');
                    }else {
                         $('#four_custom_insuranceModal2 .orangeButton').addClass('disabled-button');
                         $('#four_custom_insuranceModal2 #orangeButton').css('display','block').removeClass('disabled-button');
                    }

            break;
   
             } 

            //on behalf of heading text   ======================   
            // var mobile_bottom_permission_level = $('body#post-35458 .permissions-section .employee_level p').text();              
            // switch(mobile_bottom_permission_level) { 
            //     case "Admin": 
            //         $('#four_custom_insuranceModal2 select').prop('selectedIndex',2);
            //         four_admin_selection();
            //         $('#admin-modals .four_proxy-info').show();
            //         //1) Vertical & Horizontal. Level not sticking for Admin/Admin Proxy, add Admin Proxy option. https://www.screencast.com/t/pyE4X6jAqVu 
            //         $('#four_custom_insuranceModal2 .proxy-info .default_custom_proxy_checkbox2').prop('checked',true);

            //         $('#four_custom_permissionApplyModal #custom_manager, #four_custom_lastpermissionApplyModal #custom_manager2').removeClass('mobile_permission_preeti_yes');
            //         $('#four_custom_permissionApplyModal #custom_manager, #four_custom_lastpermissionApplyModal #custom_manager2').addClass('mobile_permission_preeti_no');
            //         $('#admin-modals #admin_four_proxy_no_orangeButton').css('display','block');
            //         $('#admin-modals #admin_four_proxy_orangeButton, .owner_tab_btn, #admin-modals #employee_orangeButton').hide();
            //         $('#four_custom_insuranceModal2 .orangeButton').removeClass('disabled-button');
            //         $('#four_custom_permissionApplyModal .manager_tab_btn').prev('li').show();
            //         $('#four_custom_lastpermissionApplyModal #admin2 .main-checkbox, #four_custom_lastpermissionApplyModal #admin2 .main-checkbox2, #four_custom_lastpermissionApplyModal #admin2 .sub-checkbox, #four_custom_lastpermissionApplyModal #admin2 .sub-checkbox2, #four_custom_lastpermissionApplyModal #manager2 .main-checkbox, #four_custom_lastpermissionApplyModal #manager2 .main-checkbox2, #four_custom_lastpermissionApplyModal #manager2 .sub-checkbox, #four_custom_lastpermissionApplyModal #manager2 .sub-checkbox2, #four_custom_lastpermissionApplyModal #employees2 .main-checkbox, #four_custom_lastpermissionApplyModal #employees2 .main-checkbox2, #four_custom_lastpermissionApplyModal #employees2 .sub-checkbox, #four_custom_lastpermissionApplyModal #employees2 .sub-checkbox2').parent().addClass('blue-bg');
            //         $('#four_custom_lastpermissionApplyModal #admin2, #four_custom_lastpermissionApplyModal #manager2, #four_custom_lastpermissionApplyModal #employees2').find('input').attr("disabled", false);
            //         $('#four_custom_lastpermissionApplyModal #admin2 .main-checkbox, #four_custom_lastpermissionApplyModal #admin2 .main-checkbox2, #four_custom_lastpermissionApplyModal #admin2 .sub-checkbox, #four_custom_lastpermissionApplyModal #admin2 .sub-checkbox2').prop('checked',false);
            //         $('#four_custom_permissionApplyModal #admin .sub-checkbox2').prop('checked',false);
            //         break;
            // } 


                          
        });  

         //carry the level selection to view advanced
         // $('.only_permission_level select#designation_level').change(function(){ 
         //     var permission_select_level = $(this).find('option:selected').text();
         //     $('body#post-35458 .permissions-section .employee_level p').text(permission_select_level);
         // });
    } 

    </script> 

                

 