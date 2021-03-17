@extends('layouts.app')

@section('content')

                <script>
                  function existingDB() {
                    confirm("Change to Exiting Database")
                    document.getElementById("currentDB").innerHTML = "<h4>Current Database: <b>\"Existing\" - Filter Mode</b></h4>";
                  }

                  function hldlldDB() {
                    confirm("Change to HLD/LLD Database")
                    document.getElementById("currentDB").innerHTML = "<h4>Current Database: <b>\"HLD/LLD\" - Filter Mode</b></h4>";
                  }

                  function deletedDB() {
                    confirm("Change to Deleted Database")
                    document.getElementById("currentDB").innerHTML = "<h4>Current Database: <b>\"Deleted\" - Filter Mode</b></h4>";
                  }

                </script>

<div class="d-flex" style="margin-left: 15px">

    <div class="btn-group-vertical" style="margin-right: 20px; margin-left: 5px">
        <button class="form-control" id="btnFilter" type="button" style="margin-bottom:5px; padding-top: 1px; background: #fff6a1" onclick= "chngBG(Event, 'btnFilter')" onmouseleave="chngLeaveColor(Event,'btnFilter')" onmouseover="chngOverColor(Event,'btnFilter')">Filter</button>
        <button class="form-control" id="btnNewLink" type="button" style="margin-bottom:5px; padding-top: 1px" onclick= "chngBG(Event, 'btnNewLink')" onmouseleave="chngLeaveColor(Event,'btnNewLink')" onmouseover="chngOverColor(Event,'btnNewLink')">New</button>
        <button class="form-control" id="btnUpdateLink" type="button" style="margin-bottom:5px; padding-top: 1px" onclick= "chngBG(Event, 'btnUpdateLink')" onmouseleave="chngLeaveColor(Event,'btnUpdateLink')" onmouseover="chngOverColor(Event,'btnUpdateLink')">Update</button>
        <button class="form-control" id="btnDeleteLink" type="button" style="padding-top: 1px" onclick= "chngBG(Event, 'btnDeleteLink')" onmouseleave="chngLeaveColor(Event,'btnDeleteLink')" onmouseover="chngOverColor(Event,'btnDeleteLink')">Delete</button>
        <button class="form-control" id="btnSubmitChanges" type="button" style="margin-bottom:5px; padding-top: 1px" onmouseleave="chngLeaveColor(Event,'btnSubmitChanges')" onmouseover="chngOverColor(Event,'btnSubmitChanges')" hidden>Submit</button>
        <button class="form-control" id="btnCancelChanges" type="button" style="padding-top: 1px" onmouseleave="chngLeaveColor(Event,'btnCancelChanges')" onmouseover="chngOverColor(Event,'btnCancelChanges')" hidden>Cancel</button>
    </div>

    <div style= "margin-left: 10px">
        <label style = "margin-bottom: 15px" id="currentDB"><h4>Current Database: <b>"Existing" - Filter Mode</b></h4></label>

        <div class= "d-flex">
            <label style= "text-align: right; margin-right: 3px; margin-left: 0px; width: 65px">Link ID</label>
            <input id="LinkID" type = "text" value = "" style="width: 120px; margin-bottom: 10px; height: 25px" required/>

        <label style="text-align: right; width: 110px; margin-right: 3px">Link Type</label>
            <input id="LinkType" type = "text" value = "" style="width: 120px; margin-bottom: 10px; height: 25px" required/>

            <div class="d-flex" style = "margin-left: 95px; margin-bottom: 10px">
                        <button type="submit" id="btnFirst" class="form-control" name="btnFirst" onmousedown="chngSVGDn(Event, 'imgfirst')" onmouseup="chngSVGUp(Event, 'imgfirst')"><img id="imgfirst" src="/svg/first.svg"/> </button>
                        <button type="submit" value="Previous" id="btnPrevious" class="form-control" name="btnNext" onmousedown="chngSVGDn(Event, 'imgprevious')" onmouseup="chngSVGUp(Event, 'imgprevious')"><img id="imgprevious" src="/svg/previous.svg"/> </button>
                        <button type="submit" value="Next" id="btnNext" class="form-control" name="btnPrev" onmousedown="chngSVGDn(Event, 'imgnext')" onmouseup="chngSVGUp(Event, 'imgnext')"><img id="imgnext" src="/svg/next.svg"/> </button>
                        <button type="submit" value="Last" id="btnLast" class="form-control" name="btnLast" onmousedown="chngSVGDn(Event, 'imglast')" onmouseup="chngSVGUp(Event, 'imglast')"><img id="imglast" src="/svg/last.svg"/> </button>

            </div>

        </div>
            <form class = "container" style="background-color: #fff6a1">

                <label style="text-align: right; width: 105px; margin-top: 25px">NE Code</label>
                <!--<select id="NECode" style="width: 120px" autofocus>
                    <option value="ALP001">ALP001</option>
                    <option value="ALP002">ALP002</option>
                    <option value="ALP003">ALP003</option>
                    <option value="ALP004">ALP004</option>
                </select>-->


                <input id="NECode" type="text" style="width: 120px" autofocus>
                <label style="width: 97px"></label>
                <label style="text-align: right; width: 95px">FE Code</label>

                <!--<Input class="dropdown-menu" id="FECode" style="width: 120px" autofocus>
                    <option value="ALP005">ALP005</option>
                    <option value="ALP006">ALP006</option>
                    <option value="ALP007">ALP007</option>
                    <option value="ALP008">ALP008</option>
                </Inputs><br/>
                <span onclick="this.parentElement.style.display='none'">X</span>
                -->
                <input id="FECode" type="text" style="width: 120px" autofocus><br/>


                <label style= "text-align: right; width: 105px; margin-top: 10px">NE Name</label>
                <input id="NEName" type="text" style="width: 180px" autofocus>
                <label style="width: 37px"></label>
                <label style="text-align: right; width: 95px">FE Name</label>
                <input id="FEName" type="text" style="width: 180px; margin-bottom: 25px" autofocus>
                <label style="width: 50px"></label><br/>

            </form>
             <div class="container d-flex" Style="alignment: left; width: 650px; margin-top: 10px">
                <label Style="text-align: left; width: 200px; margin-left:50px">
                  Azimuth:
                </label>
                <label Style="text-align: left; width: 200px">
                  Distance:
                </label>
                <label Style="text-align: left; width: 250px">
                  Counter Azimuth:
                </label>

              </div>
          </div>

    <div style= "margin-left: 20px">
        <div style= "width: 600px; margin-left: 15px">
            <label style="padding-top: 10px; text-align: left"></label><label>All records in the "Existing DB"</label>

            <input id="TotalRecord" type = "text" value = "" style= "float: right; width: 50px; margin-bottom: 5px"/>
            <label style= "padding-top: 2px; text-align: right; float: right; margin-right: 5px">Total Records</label>
        </div>

        <div class="table-responsive" style="border-left: 1px solid black; border-bottom: 1px solid black; border-top: 1px solid black; border-right: 1px solid black; background-color: #edffb6 ; width: 600px; height: 155px; margin-left: 15px">
        <table class="table">
            <thead>
            <tr style="line-height: 5px">
                <th>#</th>
                <th>NE Code</th>
                <th>FE Code</th>
                <th>Band</th>
                <th>Distance</th>
                <th>Azimuth</th>
                <th>CAzimuth</th>
            </tr>
            </thead>
            <tbody >
            <tr style="line-height: 0px">
                <td>100</td>
                <td>ALP004</td>
                <td>ALP133</td>
                <td>23</td>
                <td>0.54</td>
                <td>36</td>
                <td>216</td>
            </tr>
            <tr style="line-height: 0px">
                <td>101</td>
                <td>ALP006</td>
                <td>ALP126</td>
                <td>23</td>
                <td>0.37</td>
                <td>345</td>
                <td>165</td>
            </tr>
            <tr style="line-height: 0px">
                <td>102</td>
                <td>ALP011</td>
                <td>ALP001</td>
                <td>23</td>
                <td>3.8</td>
                <td>105</td>
                <td>285</td>
            </tr>
            <tr style="line-height: 0px">
                <td>103</td>
                <td>ALP015</td>
                <td>ALP011</td>
                <td>23</td>
                <td>11.47</td>
                <td>287</td>
                <td>107</td>
            </tr>
            <tr style="line-height: 0px">
                <td>104</td>
                <td>ALP016</td>
                <td>ALP469</td>
                <td>23</td>
                <td>2.47</td>
                <td>262</td>
                <td>82</td>
            </tr>
            </tbody>
        </table>
        </div>
        <div class= "d-flex" style= "margin-top: 10px">
            <button class="form-control" style= "margin-left: 15px; width: 100px" id="btnShowAll" name="btnShowAll">Show ALL</button>
            <button class="form-control" style= "margin-left: 350px; width: 150px" id="btnFilterToMap" name="btnFilterToMap">Filter to Map</button>

        </div>
    </div>
</div>

<div style="margin-left: 20px">
    <div >

          <div class="tab; col-md-12; d-flex" style="background-color: #e3e4e8; margin-top: 20px"> <!-- ced4da -->
                    <button id= "btnInward" class="tab-links; form-control" style="margin-left: 5px; width: auto; background-color: #fff6a1" onclick= "openTab(Event,'RelatedSites', 'btnInward')" onmouseleave="chngLeaveColor(Event,'btnInward')" onmouseover="chngOverColor(Event,'btnInward')"><h6>Inward</h6></button>
                    <button id= "btnOutward"  class="tab-links; form-control" style="margin-left: 5px; width: auto; background-color: #e3e4e8" onclick= "openTab(Event,'PathToBSC', 'btnOutward')" onmouseleave="chngLeaveColor(Event,'btnOutward')" onmouseover="chngOverColor(Event,'btnOutward')"><h6>Outward</h6></button>
                    <button id= "btnlinkSpecification"  class="tab-links; form-control" style="margin-left: 5px; width: auto; background-color: #e3e4e8" onclick= "openTab(Event,'LinkSpecification', 'btnlinkSpecification')" onmouseleave="chngLeaveColor(Event,'btnlinkSpecification')" onmouseover="chngOverColor(Event,'btnlinkSpecification')"><h6>Link Specification</h6></button>
                    <button id= "btnNEDCNVLAN"  class="tab-links; form-control" style="margin-left: 5px; width: auto; background-color: #e3e4e8" onclick= "openTab(Event,'NEDCNVLAN', 'btnNEDCNVLAN')" onmouseleave="chngLeaveColor(Event,'btnNEDCNVLAN')" onmouseover="chngOverColor(Event,'btnNEDCNVLAN')"><h6>Near-End DCN VLAN</h6></button>
                    <button id= "btnFEDCNVLAN"  class="tab-links; form-control" style="margin-left: 5px; width: auto; background-color: #e3e4e8" onclick= "openTab(Event,'FEDCNVLAN', 'btnFEDCNVLAN')" onmouseleave="chngLeaveColor(Event,'btnFEDCNVLAN')" onmouseover="chngOverColor(Event,'btnFEDCNVLAN')"><h6>Far-End DCN VLAN</h6></button>
                    <button id= "btnNETRVLAN"  class="tab-links; form-control" style="margin-left: 5px; width: auto; background-color: #e3e4e8" onclick= "openTab(Event,'NETRVLAN', 'btnNETRVLAN')" onmouseleave="chngLeaveColor(Event,'btnNETRVLAN')" onmouseover="chngOverColor(Event,'btnNETRVLAN')"><h6>Near-End Traffic VLAN</h6></button>
                    <button id= "btnFETRVLAN"  id= "btnFETRVLAN" class="tab-links; form-control" style="margin-left: 5px; width: auto; background-color: #e3e4e8" onclick= "openTab(Event,'FETRVLAN', 'btnFETRVLAN')" onmouseleave="chngLeaveColor(Event,'btnFETRVLAN')" onmouseover="chngOverColor(Event,'btnFETRVLAN')"><h6>Far-End Traffic VLAN</h6></button>

              <br/><label></label><br/>
          </div>

                <script>
                    // Get the element with id="defaultOpen" and click on it
                    document.getElementById("defaultOpen").click();
                </script>

                <!-- Tab content -->

                <div id="RelatedSites" class="tab-content" style="background-color: #e3e4e8">
                    <h3 style = "margin-top: 10px; text-align: center">Related Sites</h3>
                      <div style="width:80%; margin-left:2%; margin-right:0%; float:left;">
                        <p style = "text-align: left">All Sites routed through the Near End</p>
                      </div>
                        <div style="width:7%; margin-left:0%; margin-right:0%; float:left;">
                          <p style = "text-align: right">To Map<p>
                        </div>
                        <div style="width:7%; margin-left:0%; margin-right:4%; float:left;">
                          <p style = "text-align: right">To Excel<p>
                        </div>

                    <div style="height:50rem; width:100%; margin: auto;">
                      <div style="width:14%; margin-left:2%; margin-right:0%; float:left;  background-color: rgba(76, 175, 80, 0.3);">
                        <p class= "pt-2 font-weight-bold" style = "text-align: center">Fifth Hop<p>
                      </div>
                      <div style="width:14%; margin-left:2%; margin-right:0%; float:left;  background-color: rgba(76, 175, 80, 0.4);">
                        <p class= "pt-2 font-weight-bold" style = "text-align: center">Fourth Hop</p>
                      </div>
                      <div style="width:14%; margin-left:2%; margin-right:0%; float:left;  background-color: rgba(76, 175, 80, 0.5);">
                        <p class= "pt-2 font-weight-bold" style = "text-align: center">Third Hop</p>
                          <div class="table-responsive" style="margin-left: 2px">
                              <table class="table">
                                  <tbody >
                                  <tr style="line-height: 0px">
                                      <td>ALP593</td>
                                  </tr>
                                  <tr style="line-height: 0px">
                                      <td>ALP103</td>
                                  </tr>
                                  <tr style="line-height: 0px">
                                      <td>ALP111</td>
                                  </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                      <div style="width:14%; margin-left:2%; margin-right:0%; float:left;  background-color: rgba(76, 175, 80, 0.6);">
                        <p class= "pt-2 font-weight-bold" style = "text-align: center">Second Hop</p>
                          <div class="table-responsive" style="margin-left: 2px">
                              <table class="table">
                                  <tbody >
                                  <tr style="line-height: 0px">
                                      <td>ALPM09</td>
                                  </tr>
                                  <tr style="line-height: 0px">
                                      <td>ALP389</td>
                                  </tr>
                                  <tr style="line-height: 0px">
                                      <td>ALP512</td>
                                  </tr>
                                  <tr style="line-height: 0px">
                                      <td>ALP260</td>
                                  </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                      <div style="width:14%; margin-left:2%; margin-right:0%; float:left;  background-color: rgba(76, 175, 80, 0.7);">
                        <p class= "pt-2 font-weight-bold" style = "text-align: center">First Hop</p>
                          <div class="table-responsive" style="margin-left: 2px">
                              <table class="table">
                                  <tbody >
                                  <tr style="line-height: 0px">
                                      <td>ALP339</td>
                                  </tr>
                                  <tr style="line-height: 0px">
                                      <td>ALP110</td>
                                  </tr>
                                  <tr style="line-height: 0px">
                                      <td>ALP501</td>
                                  </tr>
                                  <tr style="line-height: 0px">
                                      <td>ALP584</td>
                                  </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                      <div style="width:14%; margin-left:2%; margin-right:0%; float:left;  background-color: rgba(76, 175, 80, 0.8);">
                        <p class= "pt-2 font-weight-bold" style = "text-align: center">Near End</p>
                          <div class="table-responsive" style="margin-left: 2px">
                              <table class="table">
                                  <thead >
                                  <tr>
                                      <th style = "color: blue; background: #fff6a1; text-align: center">AL238</th>
                                  </tr>
                                  </thead>
                              </table>
                          </div>

                      </div>
                    </div>
                </div>

                <div id="PathToBSC" class="tab-content" style="background-color: #e3e4e8; display:none" >
                    <h3 style = "margin-top: 10px; text-align: center">Path to BSC</h3>
                    <div style="width:80%; margin-left:2%; margin-right:0%; float:left;">
                      <p style = "text-align: left">All Sites next to Far End till BSC</p>
                    </div>
                      <div style="width:7%; margin-left:0%; margin-right:0%; float:left;">
                        <p style = "text-align: right">To Map<p>
                      </div>
                      <div style="width:7%; margin-left:0%; margin-right:4%; float:left;">
                        <p style = "text-align: right">To Excel<p>
                      </div>

                    <div style="height:50rem; width:100%; margin: auto;">
                      <div style="width:14%; margin-left:2%; margin-right:0%; float:left;  background-color: rgba(76, 80, 175, 0.8);">
                        <p class= "pt-2 font-weight-bold" style = "text-align: center">Far End</p>
                      </div>
                      <div style="width:14%; margin-left:2%; margin-right:0%; float:left;  background-color: rgba(76, 80, 175, 0.7);">
                          <p class= "pt-2 font-weight-bold" style = "text-align: center">First Hop</p>
                        </div>
                        <div style="width:14%; margin-left:2%; margin-right:0%; float:left;  background-color: rgba(76, 80, 175, 0.6);">
                          <p class= "pt-2 font-weight-bold" style = "text-align: center">Second Hop</p>
                        </div>
                        <div style="width:14%; margin-left:2%; margin-right:0%; float:left;  background-color: rgba(76, 80, 175, 0.5);">
                          <p class= "pt-2 font-weight-bold" style = "text-align: center">Third Hop</p>
                        </div>
                        <div style="width:14%; margin-left:2%; margin-right:0%; float:left;  background-color: rgba(76, 80, 175, 0.4);">
                          <p class= "pt-2 font-weight-bold" style = "text-align: center">Fourth Hop</p>
                        </div>
                        <div style="width:14%; margin-left:2%; margin-right:0%; float:left;  background-color: rgba(76, 80, 175, 0.3);">
                          <p class= "pt-2 font-weight-bold" style = "text-align: center">Fifth Hop</p>
                        </div>
                    </div>
                </div>


                <div id="LinkSpecification" class="tab-content" style="background-color: #e3e4e8; display:none">
                    <h3 style = "margin-top: 10px; text-align: center">High/Low Level Design</h3>
                    <div class="d-flex">
                        <div style="width:70%; margin-left:2%; margin-right:0%; float:left;">
                            <p style = "text-align: left">Link plans, equipment, and implementation details</p>
                        </div>

                        <div style="width:7%; margin-left:0%; margin-right:0%; float:left;">
                            <p style = "text-align: right">New<p>
                        </div>

                        <div style="width:7%; margin-left:0%; margin-right:4%; float:left;">
                            <p style = "text-align: right">To Excel<p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div>
                            <label style = "margin-left: 150px; margin-top: 20px" id="currentDB">Link Name</label>
                            <input id="LinkName" type = "text" value = "" style="width: 180px; margin-bottom: 40px" />

                            <div class= "d-flex">
                                <label style= "text-align: right; padding-right: 5px; width: 140px">Project Target</label>
                                <input id="projectTarget" type = "text" value = "" style="width: 120px; margin-bottom: 20px"/>

                                <label style="text-align: right; width: 140px; padding-right: 5px">Complete/Extra</label>
                                <input id="completeExtra" type = "text" list="completeExtraOptions" style="width: 120px; margin-bottom: 20px"/>
                                <datalist id="completeExtraOptions">
                                    <option value="Complete">Complete</option>
                                    <option value="Extra">Extra</option>
                                </datalist>
                            </div>

                            <div class= "d-flex">

                                <label style= "text-align: right; padding-right: 5px; width: 140px">Project Type</label>
                                <input id="projectType" type = "text" value = "" style="width: 120px; margin-bottom: 20px"/>

                                <label style="text-align: right; width: 140px; padding-right: 5px">Priority</label>
                                <input id="Priority" type = "text" value = "" style="width: 120px; margin-bottom: 20px"/>
                            </div>

                            <div class= "d-flex">
                                <label style= "text-align: right; padding-right: 5px; width: 140px">Project Motivation</label>
                                <input id="projectMotivation" type = "text" value = "" style="width: 120px; margin-bottom: 20px"/>

                                <label style="text-align: right; width: 140px; padding-right: 5px">Province</label>
                                <input id="Province" type = "text" value = "" style="width: 120px; margin-bottom: 20px"/>
                            </div>

                            <div class= "d-flex">
                                <label style= "text-align: right; padding-right: 5px; width: 140px">Responsible</label>
                                <input id="Responsible" type = "text" value = "" style="width: 120px; margin-bottom: 20px"/>

                                <label style="text-align: right; width: 140px; padding-right: 5px">Plan Date</label>
                                <input id="planDate" type = "text" value = "" style="width: 120px; margin-bottom: 20px"/>
                            </div>

                            <div class= "d-flex">
                                <label style= "text-align: right; padding-right: 5px; width: 140px">Plan Comments</label>
                                <input id="planComments" type = "text" value = "" style="width: 380px; height: 50px; margin-bottom: 20px"/>

                            </div>

                            <div class= "d-flex">
                                <label style= "text-align: right; padding-right: 5px; width: 140px">Status</label>
                                <input id="Status" type = "text" value = "" style="width: 120px; margin-bottom: 20px"/>

                            </div>

                            <div class= "d-flex">
                                <label style= "text-align: right; padding-right: 5px; width: 140px">Acceptance</label>
                                <input id="Acceptance" type = "text" value = "" style="width: 120px; margin-bottom: 20px"/>

                                <label style="text-align: right; width: 140px; padding-right: 5px">Acceptance Date</label>
                                <input id="acceptanceDate" type = "text" value = "" style="width: 120px; margin-bottom: 20px"/>
                            </div>

                            <div class= "d-flex">
                                <label style= "text-align: right; padding-right: 5px; width: 140px">Acceptance Comments</label>
                                <input id="acceptanceComments" type = "text" value = "" style="width: 380px; height: 50px; margin-bottom: 50px"/>

                            </div>
                        </div>

                        <div class="col-7">

                            <form class = "container" style="background-color: #fffbdb">
                                <h4 style = "text-align: center; margin-top: 0px;"><b>______________________ "HLD Plan" ______________________</b></h4>
                                <div class="d-flex">
                                    <label style= "font-style: italic; margin-left: 2px; text-align: center; width: 125px; margin-top: 20px">Band</label>
                                    <label style= "font-style: italic; margin-left: 15px; text-align: center; width: 125px; margin-top: 20px">Ant A</label>
                                    <label style= "font-style: italic; margin-left: 15px; text-align: center; width: 125px; margin-top: 20px">Ant B</label>
                                    <label style= "font-style: italic; margin-left: 15px; text-align: center; width: 155px; margin-top: 20px">ODU</label>
                                    <label style= "font-style: italic; margin-left: 15px; text-align: center; width: 125px; margin-top: 20px">Polarity</label>
                                    <label style= "font-style: italic; margin-left: 15px; text-align: center; width: 125px; margin-top: 20px">Configuration</label>

                                </div>

                                <div class="d-flex">
                                    <input id="Band"            type = "text" value = "" style="margin-left: 2px; width: 125px; margin-bottom: 20px"/>
                                    <input id="AntA"            type = "text" value = "" style="margin-left: 15px; width: 125px; margin-bottom: 20px"/>
                                    <input id="AntB"            type = "text" value = "" style="margin-left: 15px; width: 125px; margin-bottom: 20px"/>
                                    <input id="ODU"             type = "text" value = "" style="margin-left: 15px; width: 155px; margin-bottom: 20px"/>
                                    <input id="Polarity"        type = "text" value = "" style="margin-left: 15px; width: 125px; margin-bottom: 20px"/>
                                    <input id="Configuration"   type = "text" value = "" style="margin-left: 15px; width: 125px; margin-bottom: 20px"/>
                                </div>
                                <div class="d-flex">
                                    <label style= "font-style: italic; margin-left: 2px; text-align: center; width: 275px; margin-top: 0px">Equipment ID</label>
                                    <label style= "font-style: italic; margin-left: 15px; text-align: center; width: 275px; margin-top: 0px">Equipment Comments</label>
                                    <label style= "font-style: italic; margin-left: 15px; text-align: center; width: 275px; margin-top: 0px">PR</label>

                                </div>

                                <div class="d-flex">
                                    <input id="equipmentID" type = "text" value = "" style="margin-left: 2px; width: 275px; margin-bottom: 20px"/>
                                    <input id="equipmentComments" type = "text" value = "" style="margin-left: 15px; width: 275px; margin-bottom: 20px"/>
                                    <input id="PR" type = "text" value = "" style="margin-left: 15px; width: 275px; margin-bottom: 20px"/>

                                </div>

                            </form>


                            <form class = "container" style="background-color: #fff6a1">
                                <h4 style = "text-align: center; margin-top: 20px;"><b>______________________ "LLD Plan" ______________________</b></h4>
                                <div class="d-flex">
                                    <label style= "font-style: italic; margin-left: 2px; text-align: center; width: 145px; margin-top: 20px">BW</label>
                                    <label style= "font-style: italic; margin-left: 15px; text-align: center; width: 165px; margin-top: 20px">Freq Ch A</label>
                                    <label style= "font-style: italic; margin-left: 15px; text-align: center; width: 165px; margin-top: 20px">Freq Ch B</label>
                                    <label style= "font-style: italic; margin-left: 15px; text-align: center; width: 175px; margin-top: 20px">Modulation</label>
                                    <label style= "font-style: italic; margin-left: 15px; text-align: center; width: 145px; margin-top: 20px">Polaization</label>

                                </div>

                                <div class="d-flex">

                                    <input id="BW" type = "text" value = "" style="margin-left: 2px; width: 145px; margin-bottom: 20px"/>
                                    <input id="freqChA" type = "text" value = "" style="margin-left: 15px; width: 165px; margin-bottom: 20px"/>
                                    <input id="freqChB" type = "text" value = "" style="margin-left: 15px; width: 165px; margin-bottom: 20px"/>
                                    <input id="Modulation" type = "text" value = "" style="margin-left: 15px; width: 175px; margin-bottom: 20px"/>
                                    <input id="Polarization" type = "text" value = "" style="margin-left: 15px; width: 145px; margin-bottom: 20px"/>

                                </div>
                                <div class="d-flex">
                                    <label style= "font-style: italic; margin-left: 2px; text-align: center; width: 150px; margin-top: 0px">Capacity</label>
                                    <label style= "font-style: italic; margin-left: 15px; text-align: center; width: 160px; margin-top: 0px">Adaptive Modulation</label>
                                    <label style= "font-style: italic; margin-left: 15px; text-align: center; width: 250px; margin-top: 0px">Mix. Modulation/Capacity</label>
                                    <label style= "font-style: italic; margin-left: 15px; text-align: center; width: 250px; margin-top: 0px">Min. Modulation/Capacity</label>

                                </div>

                                <div class="d-flex">
                                    <input id="Capacity" type = "text" value = "" style="margin-left: 2px; width: 150px; margin-bottom: 20px"/>
                                    <input id="adaptModulation" type = "text" value = "" style="margin-left: 15px; width: 160px; margin-bottom: 20px"/>
                                    <input id="mixModCap" type = "text" value = "" style="margin-left: 15px; width: 250px; margin-bottom: 20px"/>
                                    <input id="minModCap" type = "text" value = "" style="margin-left: 15px; width: 250px; margin-bottom: 20px"/>

                                </div>
                                <div class="d-flex">
                                    <label style= "font-style: italic; margin-left: 2px; text-align: center; width: 145px; margin-top: 0px">Need Alignment</label>
                                    <label style= "font-style: italic; margin-left: 15px; text-align: center; width: 145px; margin-top: 0px">TX Power</label>
                                    <label style= "font-style: italic; margin-left: 15px; text-align: center; width: 145px; margin-top: 0px">RX Power</label>
                                    <label style= "font-style: italic; margin-left: 15px; text-align: center; width: 375px; margin-top: 0px">Implementation Comments</label>

                                </div>

                                <div class="d-flex">
                                    <input id="needAlignment" type = "text" value = "" style="margin-left: 2px; width: 145px; margin-bottom: 20px"/>
                                    <input id="txPower" type = "text" value = "" style="margin-left: 15px; width: 145px; margin-bottom: 20px"/>
                                    <input id="rxPower" type = "text" value = "" style="margin-left: 15px; width: 145px; margin-bottom: 20px"/>
                                    <input id="implementationComments" type = "text" value = "" style="margin-left: 15px; width: 375px; margin-bottom: 20px"/>

                                </div>
                            </form>

                        </div>


                    </div>



















                </div>

                <div id="NEDCNVLAN" class="tab-content" style="background-color: #e3e4e8; display:none" >
                    <h3 style = "margin-top: 10px; text-align: center">Near End DCN VLAN</h3>
                    <div style="width:80%; margin-left:2%; margin-right:0%; float:left;">
                      <p style = "text-align: left">Node Category, VLAN DCN & IPs for the Near End</p>
                    </div>
                      <div style="width:7%; margin-left:0%; margin-right:0%; float:left;">
                        <p style = "text-align: right">To Map<p>
                      </div>
                      <div style="width:7%; margin-left:0%; margin-right:4%; float:left;">
                        <p style = "text-align: right">To Excel<p>
                      </div>
                </div>

                <div id="FEDCNVLAN" class="tab-content" style="background-color: #e3e4e8; display:none" >
                    <h3 style = "margin-top: 10px; text-align: center">Far End DCN VLAN</h3>
                    <div style="width:80%; margin-left:2%; margin-right:0%; float:left;">
                      <p style = "text-align: left">Node Category, VLAN DCN & IPs for the Far End</p>
                    </div>
                      <div style="width:7%; margin-left:0%; margin-right:0%; float:left;">
                        <p style = "text-align: right">To Map<p>
                      </div>
                      <div style="width:7%; margin-left:0%; margin-right:4%; float:left;">
                        <p style = "text-align: right">To Excel<p>
                      </div>
                </div>


                <div id="NETRVLAN" class="tab-content" style="background-color: #e3e4e8; display:none">
                    <h3 style = "margin-top: 10px; text-align: center">Near End Traffic VLANs</h3>
                    <div style="width:80%; margin-left:2%; margin-right:0%; float:left;">
                      <p style = "text-align: left">Traffic, O&M, ESC VLANs & IPs for the Near End</p>
                    </div>
                      <div style="width:7%; margin-left:0%; margin-right:0%; float:left;">
                        <p style = "text-align: right">Update<p>
                      </div>
                      <div style="width:7%; margin-left:0%; margin-right:4%; float:left;">
                        <p style = "text-align: right">To Excel<p>
                      </div>
                </div>

                <div id="FETRVLAN" class="tab-content" style="background-color: #e3e4e8; display:none">
                    <h3 style = "margin-top: 10px; text-align: center">Far End Traffic VLANs</h3>
                    <div style="width:80%; margin-left:2%; margin-right:0%; float:left;">
                      <p style = "text-align: left">Traffic, O&M, ESC VLANs & IPs for the Far End</p>
                    </div>
                      <div style="width:7%; margin-left:0%; margin-right:0%; float:left;">
                        <p style = "text-align: right">Update<p>
                      </div>
                      <div style="width:7%; margin-left:0%; margin-right:4%; float:left;">
                        <p style = "text-align: right">To Excel<p>
                      </div>
                </div>

                <script>
                    function openTab(evt, TabName, TabButton) {

                        if (document.getElementById(TabName).style.display == "block") {
                            document.getElementById(TabButton).style.background = "#e3e4e8";
                            document.getElementById(TabName).style.display = "none";
                            return;

                        }

                        let i, tabContent, taBlinks;
                        tabContent = document.getElementsByClassName("tab-content");
                        for (i = 0; i < tabContent.length; i++) {
                            tabContent[i].style.display = "none";

                        }

                        document.getElementById("btnInward").style.background = "#e3e4e8";
                        document.getElementById("btnOutward").style.background = "#e3e4e8";
                        document.getElementById("btnlinkSpecification").style.background = "#e3e4e8";
                        document.getElementById("btnNEDCNVLAN").style.background = "#e3e4e8";
                        document.getElementById("btnFEDCNVLAN").style.background = "#e3e4e8";
                        document.getElementById("btnNETRVLAN").style.background = "#e3e4e8";
                        document.getElementById("btnFETRVLAN").style.background = "#e3e4e8";

                        document.getElementById(TabName).style.display = "block";
                        document.getElementById(TabButton).style.background = "#fff6a1";

                        // evt.currentTarget.className += " active";
                        // taBlinks[i].className = taBlinks[i].className.replace(" active", "");
                        // evt.currentTarget.button.style.background = "#fff6a1";
                        // taBlinks[i].style.background = "#e3e4e8";
                }
                    function chngOverColor(evt, ModeButton) {
                        document.getElementById(ModeButton).style.color = "red";
                    }
                    function chngLeaveColor(evt, ModeButton) {
                        document.getElementById(ModeButton).style.color = "black";
                    }
                    function chngBG(evt, ModeButton) {
                        document.getElementById("btnFilter").style.background = "ghostwhite";
                        document.getElementById("btnNewLink").style.background = "ghostwhite";
                        document.getElementById("btnUpdateLink").style.background = "ghostwhite";
                        document.getElementById("btnDeleteLink").style.background = "ghostwhite";

                        document.getElementById(ModeButton).style.background = "#fff6a1";
                    }

                    function chngSVGUp(evt, NaviButton) {
                        imgName = NaviButton.replace("img","");
                        // alert(imgName);
                        document.getElementById(NaviButton).setAttribute("src", "/svg/" + imgName + ".svg");

                    }

                    function chngSVGDn(evt, NaviButton) {
                        imgName = NaviButton.replace("img","");
                        // alert(imgName);
                        document.getElementById(NaviButton).setAttribute("src", "/svg/" + imgName + "R.svg");

                    }

                </script>


</div>

@endsection
