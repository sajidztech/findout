<?php require_once('../../default-elements/dashboard-header.blade.php'); ?> 
<?php require_once('agent-menu-contents.blade.php'); ?> 
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <!-- CREATE LISTING STARTS -->
              <div class="createlistingfullsectionwrapper w-100 ashligthbg pt-50px pb-50px">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-12">
                              <h2 class="fw-bolder text-capitalize">add new property here</h2>
                          </div> <!-- col-md-12 -->
                      </div> <!-- row -->
                      <form action="#" method="POST" class="row mt-3">
                          <div class="col-md-12 filedsgroupheading">
                              <h5>basic informations</h5>
                              <hr>
                          </div> <!-- filedsgroupheading -->
                          <div class="col-md-12 propertyaddlistingfileds">
                              <label for="propertyaddlistingtitle">property title</label>
                              <input type="text" name="propertyaddlistingtitle" id="propertyaddlistingtitle" class="w-100">
                          </div> <!-- col-md-12 -->
                          <div class="col-md-12 propertyaddlistingfileds">
                              <label for="propertyaddlistingdescription">property Details</label>
                              <textarea name="propertyaddlistingdescription" id="propertyaddlistingdescription" cols="30" rows="10" class="w-100 p-3"></textarea>
                          </div> <!-- col-md-12 -->
                          <div class="col-md-12 propertyaddlistingfileds">
                              <label for="propertyaddlistingtype">property type</label>
                              <div class="radiobuttons propertycategorytype w-100 overflow-hidden mt-1">
                                  <input type="radio" name="propertycategory" id="propertycategoryapartment" checked>
                                  <label for="propertycategoryapartment">apartment <img src="../../assets/images/property/propert-2.jpg" alt="apartment"></label>
                                  <input type="radio" name="propertycategory" id="propertycategorycondominium">
                                  <label for="propertycategorycondominium">condominium <img src="../../assets/images/property/propert-10.jpg" alt="condominium"></label>
                                  <input type="radio" name="propertycategory" id="propertycategoryhouse">
                                  <label for="propertycategoryhouse">house <img src="../../assets/images/property/propert-4.jpeg" alt="house"></label>
                                  <input type="radio" name="propertycategory" id="propertycategoryfactory">
                                  <label for="propertycategoryfactory">factory <img src="../../assets/images/property/propert-5.jpeg" alt="factory"></label>
                                  <input type="radio" name="propertycategory" id="propertycategorysinglefamily">
                                  <label for="propertycategorysinglefamily">single family <img src="../../assets/images/property/propert-11.jpg" alt="single family"></label>
                                  <input type="radio" name="propertycategory" id="propertycategoryfloor">
                                  <label for="propertycategoryfloor">floor <img src="../../assets/images/property/propert-9.jpeg" alt="floor"></label>
                              </div> <!-- radiobuttons -->
                          </div> <!-- col-md-12 -->
                          <div class="col-md-4 col-sm-12 propertyaddlistingfileds">
                              <label for="propertyaddlistingstatus">property status</label>
                              <div class="radiobuttons w-100 overflow-hidden mt-1">
                                  <input type="radio" name="propertybuyrent" id="propertybuy" checked>
                                  <label for="propertybuy">buy</label>
                                  <input type="radio" name="propertybuyrent" id="propertyrent">
                                  <label for="propertyrent">rent</label>
                              </div> <!-- radiobuttons -->
                          </div> <!-- col-md-6 col-sm-12 -->
                          <div class="col-md-4 col-sm-12 propertyaddlistingfileds">
                              <label for="propertyaddlistingcurrency">property price currency</label>
                              <div class="radiobuttons w-100 overflow-hidden mt-1">
                                  <input type="radio" name="propertycurrency" id="propertycurrencydollar" checked>
                                  <label for="propertycurrencydollar">&#36;</label>
                                  <input type="radio" name="propertycurrency" id="propertycurrencyeuro">
                                  <label for="propertycurrencyeuro">&#163;</label>
                                  <input type="radio" name="propertycurrency" id="propertycurrencyaud">
                                  <label for="propertycurrencyaud">&#8371;</label>
                              </div> <!-- radiobuttons -->
                          </div> <!-- col-md-6 col-sm-12 -->
                          <div class="col-md-4 col-sm-12 propertyaddlistingfileds">
                              <label for="propertyaddlistingprice">property price</label>
                              <input type="number" name="propertyaddlistingprice" id="propertyaddlistingprice" class="w-100">
                          </div> <!-- col-md-6 col-sm-12 -->
                          <div class="col-md-12 col-sm-12 propertyaddlistingfileds">
                              <label for="propertyaddlistingpriod">property rental prediod</label>
                              <div class="radiobuttons propertycategorytype w-100 overflow-hidden mt-1">
                                <input type="radio" name="propertypaymentpreriod" id="propertypaymentprerioddaily" checked>
                                <label for="propertypaymentprerioddaily">Daily</label>
                                <input type="radio" name="propertypaymentpreriod" id="propertypaymentpreriodweekly">
                                <label for="propertypaymentpreriodweekly">Weekly</label>
                                <input type="radio" name="propertypaymentpreriod" id="propertypaymentpreriodmonthly">
                                <label for="propertypaymentpreriodmonthly">monthly</label>
                                <input type="radio" name="propertypaymentpreriod" id="propertypaymentpreriodquarterly">
                                <label for="propertypaymentpreriodquarterly">quarterly (4 Months per)</label>
                                <input type="radio" name="propertypaymentpreriod" id="propertypaymentpreriodbie">
                                <label for="propertypaymentpreriodbie">bie (6 months per)</label>
                                <input type="radio" name="propertypaymentpreriod" id="propertypaymentpreriodyearly">
                                <label for="propertypaymentpreriodyearly">yearly</label>
                                <input type="radio" name="propertypaymentpreriod" id="propertypaymentpreriodonceinalifetime">
                                <label for="propertypaymentpreriodonceinalifetime">life time</label>
                              </div>
                          </div> <!-- col-md-6 col-sm-12 -->
                          <div class="col-md-12 filedsgroupheading">
                              <h5>location informations</h5>
                              <hr>
                          </div> <!-- filedsgroupheading -->
                          <div class="col-md-12">
                              <div class="row">
                                  <div class="col-md-6 col-sm-12">
                                    <div class="col-md-12 propertyaddlistingfileds">
                                        <label for="propertyaddlistingaddress">address</label>
                                        <input type="text" name="propertyaddlistingaddress" id="propertyaddlistingaddress" class="w-100">
                                    </div> <!-- col-md-12 -->
                                    <div class="col-md-12 propertyaddlistingfileds">
                                        <label for="propertyaddlistingstate">state/province/district</label>
                                        <input type="text" name="propertyaddlistingstate" id="propertyaddlistingstate" class="w-100">
                                    </div> <!-- col-md-12 -->
                                    <div class="col-md-12 propertyaddlistingfileds">
                                        <label for="propertyaddlistingcity">city</label>
                                        <input type="text" name="propertyaddlistingcity" id="propertyaddlistingcity" class="w-100">
                                    </div> <!-- col-md-12 -->
                                    <div class="col-md-12 propertyaddlistingfileds">
                                        <label for="propertyaddlistingzipcode">zip</label>
                                        <input type="text" name="propertyaddlistingzipcode" id="propertyaddlistingzipcode" class="w-100">
                                    </div> <!-- col-md-12 -->
                                    <div class="col-md-12 propertyaddlistingfileds">
                                        <label for="propertyaddlistingcountry">country</label>
                                        <select class="js-example-basic-multiple w-100" multiple="multiple" id="propertyaddlistingcountry" name="propertyaddlistingcountry">
                                            <option value="united states">united states</option>
                                            <option value="london">london</option>
                                            <option value="bangladesh">bangladesh</option>
                                            <option value="india">india</option>
                                            <option value="pakistan">pakistan</option>
                                            <option value="canda">canda</option>
                                            <option value="brazil">brazil</option>
                                            <option value="argentina">argentina</option>
                                            <option value="ierland">ierland</option>
                                            <option value="germany">germany</option>
                                            <option value="itlay">itlay</option>
                                        </select>
                                    </div> <!-- col-md-12 -->
                                    <div class="col-md-12 propertyaddlistingfileds d-flex mt-3">
                                        <div class="row align-self-center">
                                            <div class="col-md-4 col-sm-12 propertyaddlistingfileds">
                                                <label for="propertyaddlistingmapslatitude">Latitude</label>
                                                <input type="number" name="propertyaddlistingmapslatitude" id="propertyaddlistingmapslatitude" class="w-100">
                                            </div> <!-- col-md-4 col-sm-12 -->
                                            <div class="col-md-4 col-sm-12 propertyaddlistingfileds">
                                                <label for="propertyaddlistinglongitude">Longitude</label>
                                                <input type="number" name="propertyaddlistinglongitude" id="propertyaddlistinglongitude" class="w-100">
                                            </div> <!-- col-md-4 col-sm-12 -->
                                            <div class="col-md-4 col-sm-12 propertyaddlistingfileds">
                                                <label for="propertyaddlistingzoom">zoom</label>
                                                <input type="number" name="propertyaddlistingzoom" id="propertyaddlistingzoom" class="w-100">
                                            </div> <!-- col-md-4 col-sm-12 -->
                                        </div> <!-- row -->
                                    </div> <!-- col-md-12 -->
                                  </div> <!-- col-md-6 col-sm-12 -->
                                  <div class="col-md-6 col-sm-12 propertyaddlistingfileds mt-3">
                                    <div id="newcreatedlistingmap" class="w-100 h-100"></div>
                                  </div> <!-- col-md-6 col-sm-12 -->
                              </div> <!-- row -->
                          </div> <!-- col-md-12 -->
                          <div class="col-md-12 filedsgroupheading">
                              <h5>property detailed informations</h5>
                              <hr>
                          </div> <!-- filedsgroupheading -->
                          <div class="col-md-4 col-sm-12 propertyaddlistingfileds">
                              <label for="propertyaddlistingid">property ID (#)</label>
                              <input type="text" name="propertyaddlistingid" id="propertyaddlistingid" class="w-100" disabled>
                          </div>  <!-- col-md-4 col-sm-12 -->
                          <div class="col-md-4 col-sm-12 propertyaddlistingfileds">
                              <label for="propertyaddlistingareasize">area size</label>
                              <input type="number" name="propertyaddlistingareasize" id="propertyaddlistingareasize" class="w-100">
                          </div>  <!-- col-md-4 col-sm-12 -->
                          <div class="col-md-4 col-sm-12 propertyaddlistingfileds">
                              <label for="propertyaddlistingpostfix">area size postfix</label>
                              <input type="text" name="propertyaddlistingpostfix" id="propertyaddlistingpostfix" class="w-100">
                          </div>  <!-- col-md-4 col-sm-12 -->
                          <div class="col-md-4 col-sm-12 propertyaddlistingfileds">
                              <label for="propertyaddlistingbedrooms">bedroom(s)</label>
                              <input type="number" name="propertyaddlistingbedrooms" id="propertyaddlistingbedrooms" class="w-100">
                          </div>  <!-- col-md-4 col-sm-12 -->
                          <div class="col-md-4 col-sm-12 propertyaddlistingfileds">
                              <label for="propertyaddlistingpostbathrooms">bathroom(s)</label>
                              <input type="number" name="propertyaddlistingpostbathrooms" id="propertyaddlistingpostbathrooms" class="w-100">
                          </div>  <!-- col-md-4 col-sm-12 -->
                          <div class="col-md-4 col-sm-12 propertyaddlistingfileds">
                              <label for="propertyaddlistingpostkitchen">kitchen</label>
                              <input type="number" name="propertyaddlistingpostkitchen" id="propertyaddlistingpostkitchen" class="w-100">
                          </div>  <!-- col-md-4 col-sm-12 -->
                          <div class="col-md-4 col-sm-12 propertyaddlistingfileds">
                              <label for="propertyaddlistingpostgarage">garage</label>
                              <input type="number" name="propertyaddlistingpostgarage" id="propertyaddlistingpostgarage" class="w-100">
                          </div>  <!-- col-md-4 col-sm-12 -->
                          <div class="col-md-4 col-sm-12 propertyaddlistingfileds">
                              <label for="propertyaddlistingpostwarehouse">warehouse</label>
                              <input type="number" name="propertyaddlistingpostwarehouse" id="propertyaddlistingpostwarehouse" class="w-100">
                          </div>  <!-- col-md-4 col-sm-12 -->
                          <div class="col-md-4 col-sm-12 propertyaddlistingfileds">
                              <label for="propertyaddlistingpostguestroom">guestroom(s)</label>
                              <input type="number" name="propertyaddlistingpostguestroom" id="propertyaddlistingpostguestroom" class="w-100">
                          </div>  <!-- col-md-4 col-sm-12 -->
                          <div class="col-md-3 col-sm-12 propertyaddlistingfileds">
                              <label for="propertyaddlistingyearofbuild">year of build</label>
                              <input type="number" name="propertyaddlistingyearofbuild" id="propertyaddlistingyearofbuild" class="w-100">
                          </div>  <!-- col-md-3 col-sm-12 -->
                          <div class="col-md-3 col-sm-12 propertyaddlistingfileds">
                              <label for="propertyaddlistingpostyearofrenovation">year of renovation</label>
                              <input type="number" name="propertyaddlistingpostyearofrenovation" id="propertyaddlistingpostyearofrenovation" class="w-100">
                          </div>  <!-- col-md-3 col-sm-12 -->
                          <div class="col-md-3 col-sm-12 propertyaddlistingfileds">
                              <label for="propertyaddlistingpostvideourl">property video link</label>
                              <input type="url" name="propertyaddlistingpostvideourl" id="propertyaddlistingpostvideourl" class="w-100">
                          </div>  <!-- col-md-3 col-sm-12 -->
                          <div class="col-md-3 col-sm-12 propertyaddlistingfileds align-self-end d-flex mb-3">
                              <input type="file" name="propertyaddlistingpostvideothumb" id="propertyaddlistingpostvideothumb" class="d-none">
                              <label for="propertyaddlistingpostvideothumb" class="propertyaddlistingpostvideothumb btn-9 w-100 mb-0 cursor-pointer text-center">upload image</label>
                          </div>  <!-- col-md-3 col-sm-12 -->
                          <div class="col-md-3 col-sm-12 propertyaddlistingfileds">
                              <label for="propertyaddlistinglowestnumberofguest">Lowest guest can live</label>
                              <input type="number" name="propertyaddlistinglowestnumberofguest" id="propertyaddlistinglowestnumberofguest" class="w-100">
                          </div>  <!-- col-md-3 col-sm-12 -->
                          <div class="col-md-3 col-sm-12 propertyaddlistingfileds">
                              <label for="propertyaddlistinghighestnumberofguest">highest guest can live</label>
                              <input type="number" name="propertyaddlistinghighestnumberofguest" id="propertyaddlistinghighestnumberofguest" class="w-100">
                          </div>  <!-- col-md-3 col-sm-12 -->
                          <div class="col-md-3 col-sm-12 propertyaddlistingfileds">
                              <label for="propertyaddlistinghighestbaby">highest Baby guest allow</label>
                              <input type="number" name="propertyaddlistinghighestbaby" id="propertyaddlistinghighestbaby" class="w-100">
                          </div>  <!-- col-md-3 col-sm-12 -->
                          <div class="col-md-3 col-sm-12 propertyaddlistingfileds">
                              <label for="propertyaddlistingdiscount">Discuount (If have) (%)</label>
                              <input type="number" name="propertyaddlistingdiscount" id="propertyaddlistingdiscount" class="w-100" placeholder="Type here only the number">
                          </div>  <!-- col-md-3 col-sm-12 -->
                          <div class="col-md-12 filedsgroupheading">
                              <h5>additional features</h5>
                              <hr>
                          </div> <!-- filedsgroupheading -->
                          <div class="row propertyaddlistingfileds">
                              <div class="col-md-12 radiobuttons mt-1">
                                <input type="checkbox" name="additionalfeaturebarbeque" id="additionalfeaturebarbeque">
                                <label for="additionalfeaturebarbeque"><i class="fas fa-drumstick-bite"></i> barbeque</label>
                                <input type="checkbox" name="additionalfeaturelaundry" id="additionalfeaturelaundry">
                                <label for="additionalfeaturelaundry"><i class="fas fa-hands-wash"></i> laundry</label>
                                <input type="checkbox" name="additionalfeaturedryer" id="additionalfeaturedryer">
                                <label for="additionalfeaturedryer"><i class="fas fa-fan"></i> dryer</label>
                                <input type="checkbox" name="additionalfeaturegym" id="additionalfeaturegym">
                                <label for="additionalfeaturegym"><i class="fas fa-dumbbell"></i> gym</label>
                                <input type="checkbox" name="additionalfeaturelawan" id="additionalfeaturelawan">
                                <label for="additionalfeaturelawan"><i class="fas fa-landmark"></i> lawan</label>
                                <input type="checkbox" name="additionalfeatureoutdoorshower" id="additionalfeatureoutdoorshower">
                                <label for="additionalfeatureoutdoorshower"><i class="fas fa-shower"></i> outdoor shower</label>
                                <input type="checkbox" name="additionalfeaturemicrowave" id="additionalfeaturemicrowave">
                                <label for="additionalfeaturemicrowave"><i class="fab fa-hotjar"></i> microwave</label>
                                <input type="checkbox" name="additionalfeaturerefrigaretor" id="additionalfeaturerefrigaretor">
                                <label for="additionalfeaturerefrigaretor"><i class="fas fa-icicles"></i> refrigaretor</label>
                                <input type="checkbox" name="additionalfeaturesauna" id="additionalfeaturesauna">
                                <label for="additionalfeaturesauna"><i class="fas fa-hot-tub"></i> sauna</label>
                                <input type="checkbox" name="additionalfeatureswimingpool" id="additionalfeatureswimingpool">
                                <label for="additionalfeatureswimingpool"><i class="fas fa-swimming-pool"></i> swiming pool</label>
                                <input type="checkbox" name="additionalfeatureTVcable" id="additionalfeatureTVcable">
                                <label for="additionalfeatureTVcable"><i class="fas fa-tv"></i> TV cable</label>
                                <input type="checkbox" name="additionalfeaturewifi" id="additionalfeaturewifi">
                                <label for="additionalfeaturewifi"><i class="fas fa-wifi"></i> wifi</label>
                                <input type="checkbox" name="additionalfeaturewasher" id="additionalfeaturewasher">
                                <label for="additionalfeaturewasher"><i class="fas fa-sink"></i> washer</label>
                                <input type="checkbox" name="additionalfeaturewindowcovering" id="additionalfeaturewindowcovering">
                                <label for="additionalfeaturewindowcovering"><i class="fas fa-window-restore"></i> window covering</label>
                                <input type="checkbox" name="additionalfeaturereastroom" id="additionalfeaturereastroom">
                                <label for="additionalfeaturereastroom"><i class="fas fa-person-booth"></i> reast room</label>
                              </div> <!-- col-md-12 -->
                          </div> <!-- row -->
                          <div class="col-md-12 filedsgroupheading">
                              <h5>property media</h5>
                              <hr>
                          </div> <!-- filedsgroupheading -->
                          <div class="col-md-12 propertyaddlistingfileds">
                              <ul class="propertyuploadedmediaallimages w-100 overflow-hidden">
                                  <li>
                                      <img src="../../assets/images/property/propert-8.jpeg" alt="uplaodproperty">
                                      <a href="#"><i class="fi-rs-cross"></i></a>
                                  </li>
                                  <li>
                                      <img src="../../assets/images/property/propert-7.jpeg" alt="uplaodproperty">
                                      <a href="#"><i class="fi-rs-cross"></i></a>
                                  </li>
                                  <li>
                                      <img src="../../assets/images/property/propert-6.jpeg" alt="uplaodproperty">
                                      <a href="#"><i class="fi-rs-cross"></i></a>
                                  </li>
                                  <li>
                                      <img src="../../assets/images/property/propert-4.jpeg" alt="uplaodproperty">
                                      <a href="#"><i class="fi-rs-cross"></i></a>
                                  </li>
                              </ul> <!-- propertyuploadedmediaallimages -->
                              <div class="propertyimageuploaderbtn w-100 overflow-hidden text-center">
                                  <label for="propertyaddlistingpostimageuploader" class="darkash darkcolor"><i class="fas fa-cloud-upload-alt"></i> upload images of your property</label>
                                  <input type="file" name="propertyaddlistingpostimageuploader" id="propertyaddlistingpostimageuploader" class="d-none">
                              </div> <!-- propertyimageuploaderbtn -->
                          </div> <!-- col-md-12 -->
                          <div class="col-md-12 filedsgroupheading">
                              <h5>property related files</h5>
                              <hr>
                          </div> <!-- filedsgroupheading -->
                          <div class="col-md-12 propertyaddlistingfileds">
                              <ul class="propertyuploadedallfiles w-100 overflow-hidden">
                                  <li>
                                      <a href="#" class="filename">propert-files.docx</a>
                                      <a href="#" class="close"><i class="fi-rs-cross"></i></a>
                                  </li>
                                  <li>
                                      <a href="#" class="filename">door-files.docx</a>
                                      <a href="#" class="close"><i class="fi-rs-cross"></i></a>
                                  </li>
                                  <li>
                                      <a href="#" class="filename">maintainance.docx</a>
                                      <a href="#" class="close"><i class="fi-rs-cross"></i></a>
                                  </li>
                                  <li>
                                      <a href="#" class="filename">land-surveyer.docx</a>
                                      <a href="#" class="close"><i class="fi-rs-cross"></i></a>
                                  </li>
                              </ul> <!-- propertyuploadedmediaallimages -->
                              <div class="propertyimageuploaderbtn w-100 overflow-hidden text-center">
                                  <label for="propertyaddlistingpostfileuploader" class="darkash darkcolor"><i class="fas fa-cloud-upload-alt"></i> upload document files of your property</label>
                                  <input type="file" name="propertyaddlistingpostfileuploader" id="propertyaddlistingpostfileuploader" class="d-none">
                              </div> <!-- propertyimageuploaderbtn -->
                          </div> <!-- col-md-12 -->
                          <div class="col-md-12 filedsgroupheading">
                              <h5>floor planning</h5>
                              <hr>
                          </div> <!-- filedsgroupheading -->
                          <div class="col-lg-10 col-md-8 col-sm-12 propertyaddlistingfileds">
                              <label for="propertyaddlistingfloorplantitle">floor plan title</label>
                              <input type="text" name="propertyaddlistingfloorplantitle" id="propertyaddlistingfloorplantitle" class="w-100">
                          </div>  <!-- col-md-12 -->
                          <div class="col-lg-2 col-md-4 col-sm-12 propertyaddlistingfileds align-self-end d-flex">
                              <label for="propertyaddlistingfloorimage" class="floorimageuploadlabel w-100 btn-9 align-self-center">upload image</label>
                              <input type="file" name="propertyaddlistingfloorimage" id="propertyaddlistingfloorimage" class="d-none">
                          </div>  <!-- col-lg-2 col-md-4 col-sm-12 -->
                          <div class="col-md-12 propertyaddlistingfileds">
                              <label for="propertyaddlistingfloorplandescription">floor plan description</label>
                              <textarea name="propertyaddlistingfloorplandescription" id="propertyaddlistingfloorplandescription" cols="30" rows="10" class="w-100 p-3"></textarea>
                          </div>  <!-- col-md-12 -->
                          <div class="col-lg-2 col-md-4 col-sm-12 propertyaddlistingfileds">
                              <label for="propertyaddlistingfloorplanbedroom">bedroom</label>
                              <input type="number" name="propertyaddlistingfloorplanbedroom" id="propertyaddlistingfloorplanbedroom" class="w-100">
                          </div>  <!-- col-lg-2 col-md-4 col-sm-12 -->
                          <div class="col-lg-2 col-md-4 col-sm-12 propertyaddlistingfileds">
                              <label for="propertyaddlistingfloorplanbathroom">bathroom</label>
                              <input type="number" name="propertyaddlistingfloorplanbathroom" id="propertyaddlistingfloorplanbathroom" class="w-100">
                          </div>  <!-- col-lg-2 col-md-4 col-sm-12 -->
                          <div class="col-lg-2 col-md-4 col-sm-12 propertyaddlistingfileds">
                              <label for="propertyaddlistingfloorplanguestroom">guestroom</label>
                              <input type="number" name="propertyaddlistingfloorplanguestroom" id="propertyaddlistingfloorplanguestroom" class="w-100">
                          </div>  <!-- col-lg-2 col-md-4 col-sm-12 -->
                          <div class="col-lg-2 col-md-4 col-sm-12 propertyaddlistingfileds">
                              <label for="propertyaddlistingfloorplanfloorsize">floor size</label>
                              <input type="number" name="propertyaddlistingfloorplanfloorsize" id="propertyaddlistingfloorplanfloorsize" class="w-100">
                          </div>  <!-- col-lg-2 col-md-4 col-sm-12 -->
                          <div class="col-lg-2 col-md-4 col-sm-12 propertyaddlistingfileds">
                              <label for="propertyaddlistingfloorplansizepostfix">size postfix</label>
                              <input type="text" name="propertyaddlistingfloorplansizepostfix" id="propertyaddlistingfloorplansizepostfix" class="w-100">
                          </div>  <!-- col-lg-2 col-md-4 col-sm-12 -->
                          <div class="col-lg-2 col-md-4 col-sm-12 propertyaddlistingfileds align-self-end">
                              <button type="button" class="btn-2 w-100">add</button>
                          </div>  <!-- col-lg-2 col-md-4 col-sm-12 -->
                          <div class="col-md-12">
                              <div class="floorplanwrapper w-100 overflow-hidden">
                                  <img src="../../assets/images/property/propert-8.jpeg" alt="floor plan">
                                  <div class="floorplanwrappertexts overflow-hidden">
                                      <strong>floor-1</strong>
                                      <ul>
                                          <li><p>bedroom : 3</p></li>
                                          <li><p>bathroom : 2</p></li>
                                          <li><p>guestroom : 0</p></li>
                                          <li><p>floor size : 900</p></li>
                                          <li><p>size postfix : sq ft.</p></li>
                                      </ul>
                                      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Minibus Bono rum et Mazloum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit met.", comes from a line in section 1.10.32.</p>
                                  </div> <!-- floorplanwrappertexts -->
                                  <div class="floorplandeleteedit">
                                      <a href="#"><i class="fi-rs-pencil"></i></a>
                                      <a href="#"><i class="fi-rs-trash"></i></a>
                                  </div> <!-- floorplandeleteedit -->
                              </div> <!-- floorplanwrapper -->
                              <div class="floorplanwrapper w-100 overflow-hidden">
                                  <img src="../../assets/images/property/propert-6.jpeg" alt="floor plan">
                                  <div class="floorplanwrappertexts overflow-hidden">
                                      <strong>floor-2</strong>
                                      <ul>
                                          <li><p>bedroom : 1</p></li>
                                          <li><p>bathroom : 1</p></li>
                                          <li><p>guestroom : 0</p></li>
                                          <li><p>floor size : 400</p></li>
                                          <li><p>size postfix : sq ft.</p></li>
                                      </ul>
                                      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                  </div> <!-- floorplanwrappertexts -->
                                  <div class="floorplandeleteedit">
                                      <a href="#"><i class="fi-rs-pencil"></i></a>
                                      <a href="#"><i class="fi-rs-trash"></i></a>
                                  </div> <!-- floorplandeleteedit -->
                              </div> <!-- floorplanwrapper -->
                              <div class="floorplanwrapper w-100 overflow-hidden">
                                  <img src="../../assets/images/property/propert-4.jpeg" alt="floor plan">
                                  <div class="floorplanwrappertexts overflow-hidden">
                                      <strong>floor-3</strong>
                                      <ul>
                                          <li><p>bedroom : 2</p></li>
                                          <li><p>bathroom : 1</p></li>
                                          <li><p>guestroom : 1</p></li>
                                          <li><p>floor size : 1500</p></li>
                                          <li><p>size postfix : sq ft.</p></li>
                                      </ul>
                                      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words.</p>
                                  </div> <!-- floorplanwrappertexts -->
                                  <div class="floorplandeleteedit">
                                      <a href="#"><i class="fi-rs-pencil"></i></a>
                                      <a href="#"><i class="fi-rs-trash"></i></a>
                                  </div> <!-- floorplandeleteedit -->
                              </div> <!-- floorplanwrapper -->
                          </div> <!-- col-md-12 -->
                          <div class="col-md-6 col-sm-4 col-xs-12 propertyaddlistingfileds mt-4">
                          </div> <!-- propertyaddlistingfileds -->
                          <div class="col-md-6 col-sm-8 col-xs-12 propertyaddlistingfileds mt-4">
                              <button type="submit" class="btn-2 w-100">Submit listing</button>
                          </div> <!-- propertyaddlistingfileds -->
                      </form> <!-- row -->
                  </div> <!-- container -->
              </div> <!-- createlistingfullsectionwrapper -->
              <!-- CREATE LISTING ENDS -->
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
<?php require_once('../../default-elements/dashboard-footer.blade.php'); ?> 