<!DOCTYPE html>
<script type="text/javascript">
<?php
 include "/var/www/html/ListOIA/application/modules/Home/ajax/home.js";
?>
</script>

<html>
<head>
    <style>
        .header {
            height : 50px;
            color: #555;
            border-radius: 0;
            position: fixed;
            border: none;
            background-color: #fff;
            box-shadow: 0 1px 10px -6px rgba(0,0,0,0.42), 0 1px 10px 0 rgba(0,0,0,0.12), 0 4px 5px -2px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            font-family: "Roboto","Helvetica","Arial",sans-serif;
            font-size: 12px;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1030;
            display: flex;
            flex-direction: row;
            padding: 10px 15px;
            vertical-align: middle;
            align-items: center;
        }
    </style>
</head>
<body>
<div class="header">
    <p>HALO</p>>
    <div id="main-navigation" class="collapse navbar-collapse">
        <ul id="menu-top" class="nav navbar-nav"><li id="menu-item-1047" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-908 current_page_item menu-item-1047 active"><a title="HOME" href="http://oia.unsyiah.ac.id/">HOME</a></li>
            <li id="menu-item-1048" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1048 dropdown"><a title="SERVICES" href="#" class="dropdown-toggle">SERVICES <span class="caret-wrap"><span class="caret"></span></span></a>
                <ul role="menu" class="dropdown-menu">
                    <li id="menu-item-1045" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1045 dropdown dropdown-submenu"><a title="Scholarship" href="http://oia.unsyiah.ac.id/scholarship/" class="dropdown-toggle">Scholarship <span class="caret-wrap"><span class="caret"></span></span></a>
                        <ul role="menu" class="dropdown-menu">
                            <li id="menu-item-1403" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1403"><a title="Partial Scholarship" href="http://oia.unsyiah.ac.id/partial-scholarship/">Partial Scholarship</a></li>
                            <li id="menu-item-1434" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1434"><a title="DARMASISWA" href="http://oia.unsyiah.ac.id/darmasiswa/">DARMASISWA</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-1200" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1200 dropdown dropdown-submenu"><a title="Exchange Program" href="#" class="dropdown-toggle">Exchange Program <span class="caret-wrap"><span class="caret"></span></span></a>
                        <ul role="menu" class="dropdown-menu">
                            <li id="menu-item-1198" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1198"><a title="Inbound" href="http://oia.unsyiah.ac.id/exchange-program/inbound/">Inbound</a></li>
                            <li id="menu-item-1199" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a title="Outbound" href="http://oia.unsyiah.ac.id/exchange-program/outbound/">Outbound</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-1043" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1043"><a title="Immigration" href="http://oia.unsyiah.ac.id/immigration/">Immigration</a></li>
                    <li id="menu-item-1042" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1042"><a title="Living In Banda Aceh" href="http://oia.unsyiah.ac.id/living-in-banda-aceh/">Living In Banda Aceh</a></li>
                    <li id="menu-item-1132" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1132"><a title="Newsletter" href="http://oia.unsyiah.ac.id/newsletter/">Newsletter</a></li>
                    <li id="menu-item-1058" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1058"><a title="Download" href="http://oia.unsyiah.ac.id/download/">Download</a></li>
                </ul>
            </li>
            <li id="menu-item-1156" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1156 dropdown"><a title="EDUCATION" href="#" class="dropdown-toggle">EDUCATION <span class="caret-wrap"><span class="caret"></span></span></a>
                <ul role="menu" class="dropdown-menu">
                    <li id="menu-item-1165" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1165"><a title="Academic Calendar" href="https://unsyiah.ac.id/uploads/files/kalender_akademik_2018-2019.pdf">Academic Calendar</a></li>
                    <li id="menu-item-1166" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1166 dropdown dropdown-submenu"><a title="Bachelor Degree" href="#" class="dropdown-toggle">Bachelor Degree <span class="caret-wrap"><span class="caret"></span></span></a>
                        <ul role="menu" class="dropdown-menu">
                            <li id="menu-item-1168" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1168"><a title="International Undergraduate Program" href="http://oia.unsyiah.ac.id/international-undergraduate-program/">International Undergraduate Program</a></li>
                            <li id="menu-item-1167" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1167"><a title="International Master Program" href="http://oia.unsyiah.ac.id/international-master-program/">International Master Program</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li id="menu-item-1181" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1181 dropdown"><a title="NEWS" href="#" class="dropdown-toggle">NEWS <span class="caret-wrap"><span class="caret"></span></span></a>
                <ul role="menu" class="dropdown-menu">
                    <li id="menu-item-1180" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1180"><a title="Activities" href="http://oia.unsyiah.ac.id/category/activities/">Activities</a></li>
                    <li id="menu-item-1179" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1179"><a title="Announcement" href="http://oia.unsyiah.ac.id/category/announcement/">Announcement</a></li>
                </ul>
            </li>
            <li id="menu-item-1344" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1344"><a title="Student Testimony" href="http://oia.unsyiah.ac.id/category/student-testimony/">Student Testimony</a></li>
            <li id="menu-item-1094" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1094"><a title="MoU" target="_blank" href="http://mou.unsyiah.ac.id">MoU</a></li>
            <li id="menu-item-1046" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1046"><a title="ABOUT US" href="http://oia.unsyiah.ac.id/about-us/">ABOUT US</a></li>
        </ul>
    </div>
</div>
</body>
</html>