
<div style="width:99%; border:solid 0px red;" id="divtab8">
                  <div class="TabDv">
                    <div  style="padding:20px 0px 0px 0px;">
                      <ul id="tabstabs1" class="shadetabs1">
						<li id="dvDisableBloodPressure" <?php if($family_history_count > 0) {echo"style='display:none'" ;}?>>
							<a href="#" rel="">Blood Pressure</a>
						</li>
						<li id="dvEnableBloodPressure" <?php if($family_history_count == 0) {echo"style='display:none'"; }?>>
							<a href="#" rel="tabs1a">Blood Pressure</a>
						</li>

						<li id="dvDisableSugarProfile" <?php if($blood_pressure_count > 0) {echo"style='display:none'" ;}?>>
							<a href="#" rel="">Sugar Profile</a>
						</li>
						<li id="dvEnableSugarProfile" <?php if($blood_pressure_count == 0) {echo"style='display:none'"; }?>>
							<a href="#" rel="tabs2a">Sugar Profile</a>
						</li>

						<li id="dvDisableLipidProfile" <?php if($sugar_profile_count > 0) {echo"style='display:none'" ;}?>>
							<a href="#" rel="">Lipid Profile</a>
						</li>
						<li id="dvEnableLipidProfile" <?php if($sugar_profile_count == 0) {echo"style='display:none'"; }?>>
							<a href="#" rel="tabs4a">Lipid Profile</a>
						</li>

						<li id="dvDisableLifeStyle" <?php if($lipid_profile_count > 0) {echo"style='display:none'" ;}?>>
							<a href="#" rel="">Life Style</a>
						</li>
						
						<li id="dvEnableLifeStyle" <?php if($lipid_profile_count == 0) {echo"style='display:none'"; }?>>
							<a href="#" rel="tabs3a">Life Style</a>
						</li>

                      
                      </ul>
                    </div>
                    <div class="TabContentDetails1">
                      <div id="tabs1a" class="tabcontent">
                         <?php include "view_files/blood_pressure.inc.php";?>
                      </div>
                      <div id="tabs2a" class="tabcontent">
                         <?php include "view_files/sugar_profile.inc.php";?>
                      </div>
                    </div>
                  
                    <div id="tabs4a" class="tabcontent">
                       <?php include "view_files/lipid_profile.inc.php";?>
                  </div>
                    <div id="tabs3a" class="tabcontent">
                        <?php include "view_files/life_style.inc.php";?>
                    </div>
                </div>
              </div>