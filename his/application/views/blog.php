<?php include 'includes/connector.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/tab.php';?>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

<script type="text/javascript">

var base = "http://test.hiskenya.org/";



function setLinks() {
    
  jQuery("#map1").attr("src", base + "api/mapViews/Om7R4Y4xSfX/data");
  jQuery("#map2").attr("src", base + "api/mapViews/qlvRpTK44T7/data");
  jQuery("#chart1").attr("src", base + "api/charts/fNzZOUER6vK/data");
  jQuery("#chart2").attr("src", base + "api/charts/y4TfByS5YIz/data");
  jQuery("#table1").load(base + "api/reportTables/MfIKCoKo3oN/data.pdf");
  jQuery("#table2").attr(base + "api/reportTables/NBt7kGTOQTb/data");
  var anchor = $("<iframe></iframe>").attr("src",'http://test.hiskenya.org/api/reportTables/MfIKCoKo3oN/data.html').attr("height",780).attr("width",780).append("<br />"); 
$("#reports").append(anchor).load();
 

						     
                               
                                		
                                        
                              
}


jQuery(document).ready(function() {
/*$.post( base + "dhis-web-commons-security/login.action", { 
      j_username: "hi4kenya", j_password: "Hi4kenya" 
    },
    setLinks
  );*/
     setLinks();
       
});

</script>


<!-- header ends -->
        <!-- content begins -->
        		<div id="content_top"></div>
       			<div id="content">
                	<div id="content_razd">
                    
                    
                      <div id="left">
                           <h2>Lorem Ipsum Dolor Sit Amet</h2>
                            <div class="datc_comment">
                              <div class="datc"><img src="<?php echo base_url('images/fish_dat.gif');?>" style=" vertical-align:middle" alt="" />&nbsp;&nbsp;<a href="#">Sep 23, 2011</a></div>
                                <div class="bloger"><img src="<?php echo base_url('images/fish_bloger.gif');?>" style=" vertical-align:middle" alt="" />&nbsp;&nbsp;<a href="#">by John Johnson</a></div>
                                <div class="comment"><img src="<?php echo base_url('images/fish_comment.gif');?>" style=" vertical-align:middle" alt="" />&nbsp;&nbsp;<a href="#">12 Comments </a></div>
                           </div>
                           <div style=" height:5px"></div>
                           <div id="chartA1" class="chart"></div>

                            <img src="<?php echo base_url('images/img21.jpg');?>" alt="" />
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis urna sit amet ligula tristique egestas at ut turpis. Praesent tempus lorem in sapien vehicula sit amet iaculis augue aliquet. 
                           <div class="read_r"><a href="#">more</a></div>
                            <div style="height:15px; width: 100%"></div>
                            
                            <h2>DHIS REPORTS</h2>
                            <div class="datc_comment">
                              <div class="datc"><img src="<?php echo base_url('images/fish_dat.gif');?>" style=" vertical-align:middle" alt="" />&nbsp;&nbsp;<a href="#">Sep 23, 2011</a></div>
                                <div class="bloger"><img src="<?php echo base_url('images/fish_bloger.gif');?>" style=" vertical-align:middle" alt="" />&nbsp;&nbsp;<a href="#">by John Johnson</a></div>
                                <div class="comment"><img src="<?php echo base_url('images/fish_comment.gif');?>" style=" vertical-align:middle" alt="" />&nbsp;&nbsp;<a href="#">12 Comments </a></div>
                           </div>
                           <div style=" height:5px"></div>

                           <ul>
                                    <li><a href="http://apps.dhis2.org/demo/api/reportTables/NBt7kGTOQTb/data.html">District 
                                    Feedback 
                                    Indicators</a> | <a 
                                    href="http://apps.dhis2.org/demo/api/reportTables/NBt7kGTOQTb/data.pdf">PDF</a> | <a 
                                    href="http://apps.dhis2.org/demo/api/reportTables/NBt7kGTOQTb/data.xls">XLS</a> | <a href="http://apps.dhis2.org/demo/api/reportTables/NBt7kGTOQTb/data.csv">CSV</a></li>
                                    <li><a href="http://apps.dhis2.org/demo/api/reportTables/xIWpSo5jjT1/data.html">District Maternal Health</a> | <a href="http://apps.dhis2.org/demo/api/reportTables/xIWpSo5jjT1/data.pdf">PDF</a> | <a 
                                    href="http://apps.dhis2.org/demo/api/reportTables/xIWpSo5jjT1/data.xls">XLS</a> | <a href="http://apps.dhis2.org/demo/api/reportTables/xIWpSo5jjT1/data.csv">CSV</a></li>
                                    <li><a href="http://apps.dhis2.org/demo/api/reportTables/GXG56cBuqcm/data.html">ANC Visits Fixed and Outreach</a> | <a href="http://apps.dhis2.org/demo/api/reportTables/GXG56cBuqcm/data.pdf">PDF</a> 
                                    | <a href="http://apps.dhis2.org/demo/api/reportTables/GXG56cBuqcm/data.xls">XLS</a> | <a href="http://apps.dhis2.org/demo/api/reportTables/GXG56cBuqcm/data.csv">CSV</a></li>
                               </ul>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis urna sit amet ligula tristique egestas at ut turpis. Praesent tempus lorem in sapien vehicula sit amet iaculis augue aliquet. 
                           <div class="read_r"><a href="#">more</a></div>
                           <div style=" height:5px"></div> 
                           <h3>Maps</h3>
                            <img style="padding: 5px; margin: 5px; border: 1px solid #c0c0c0; width: 400px" id="map1" />
                            <img style="padding: 15px; margin: 15px; border: 1px solid #c0c0c0; width: 400px" id="map2" />

                            <h3>Charts</h3>
                            <img style="padding: 15px; margin: 15px; border: 1px solid #c0c0c0;" id="chart1" />
                            <img style="padding: 15px; margin: 15px; border: 1px solid #c0c0c0;" id="chart2" />
                            <div id="chartA1" class="chart"></div>
                            <h3>Embedded tables</h3>
                            <div id="table1"></div>
                            <div id="table2"></div>
                            <div id="reports" style="position:relative; margin-top:154px; left:40px;"></div>
                            <div id="results" style="position:relative; margin-top:154px; left:40px;"></div>



                           
                           
                            
                            
                         </div>
                         <div id="right">
                            <h2>INDICATORS</h2>
                            <div style=" height:5px"></div>
                              <ul class="spis">
                                <li><a href="#">DVI</a></li>
                                <li><a href="#">Child Health</a></li>
                                <li><a href="#">Family Health</a></li>
				<li><a href="#">Immunization</a></li>
				<li><a href="#">HIV</a></li>
                              </ul>
                            <div style=" height:25px"></div>
                            <h2>REPORTS</h2>
                            <div style=" height:5px"></div>
                              <ul class="spis">
                                  
                                    
                                  </ul>
                            <div style=" height:25px"></div>  
                            <h2>MFL</h2>
                            <div style=" height:5px"></div>
                              <ul class="spis">
                                <li><a href="#">Log in</a></li>
                                <li><a href="#">Valid XHTML</a></li>
                                <li><a href="#">XFN</a></li>
                                <li><a href="#">Word Press</a></li>
                              </ul><br />
            
                             <h2>Calendar</h2>
                            <div style=" height:5px"></div>
                            <div id="calendar">
                                          <table id="calendar2" summary="Calendar">
                                            <caption>
                                              <b>January 2011</b>
                                            </caption>
                                            <thead>
                                              <tr>
                                                <th abbr="Monday" scope="col" title="Monday">M</th>
                                                <th abbr="Tuesday" scope="col" title="Tuesday">T</th>
                                                <th abbr="Wednesday" scope="col" title="Wednesday">W</th>
                                                <th abbr="Thursday" scope="col" title="Thursday">T</th>
                                                <th abbr="Friday" scope="col" title="Friday">F</th>
                                                <th abbr="Saturday" scope="col" title="Saturday">S</th>
                                                <th abbr="Sunday" scope="col" title="Sunday">S</th>
                                              </tr>
                                            </thead>
                                            <tfoot>
                                              <tr>
                                                <td abbr="Des" colspan="3" id="prev"><a href="#">&laquo; Des</a></td>
                                                <td class="pad">&nbsp;</td>
                                                <td abbr="Feb" colspan="3" id="next" class="pad"><a href="#">Feb &raquo;</a></td>
                                              </tr>
                                            </tfoot>
                                            <tbody>
                                              <tr>
                                                <td colspan="5" class="pad">&nbsp;</td>
                                                <td>1</td>
                                                <td>2</td>
                                              </tr>
                                              <tr>
                                                <td>3</td>
                                                <td>4</td>
                                                <td>5</td>
                                                <td>6</td>
                                                <td>7</td>
                                                <td>8</td>
                                                <td>9</td>
                                              </tr>
                                              <tr>
                                                <td>10</td>
                                                <td>11</td>
                                                <td>12</td>
                                                <td>13</td>
                                                <td>14</td>
                                                <td>15</td>
                                                <td id="now">16</td>
                                              </tr>
                                              <tr>
                                                <td>17</td>
                                                <td>18</td>
                                                <td>19</td>
                                                <td>20</td>
                                                <td>21</td>
                                                <td>22</td>
                                                <td>23</td>
                                              </tr>
                                              <tr>
                                                <td>24</td>
                                                <td>25</td>
                                                <td>26</td>
                                                <td>27</td>
                                                <td>28</td>
                                                <td >29</td>
                                                <td>30</td>
                                              </tr>
                                              <tr>
                                                <td>31</td>
                                                <td colspan="6"></td>
                                              </tr>
                                            </tbody>
                                          </table>
                              </div>
                         
                        </div>	
                          
                      <div style="clear: both"></div>
                 
                 
        			</div>
                </div>
                <div id="content_bot"></div>
    <!-- content ends --> 
    <div style="height:15px; width: 100%"></div>
    <!-- bottom begin -->
    <?php include 'includes/footer.php';?>