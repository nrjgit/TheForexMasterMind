<?php /* Template Name: Forex Broker Search */ ?>

<?php get_header(); ?>
<div class="main company-page">
    <div class="container">
        <h2 class="subheading" style="text-align: center;">Search Directory</h2>


                <div class="companyFilter">
            <div class="direct-search zNice">
                <div class="direct-search-text">
                    Direct Search                </div>
                <div class="direct-search-text">
                    <form method="post">
                        <div class="direct-search-wrap">
                            <input type="text" placeholder="Company Name" name="search_by_company_name" id="search_by_company_name" required="required">
                            <button type="submit" value="" class="direct-search-btn btn"><i class="icon-sprite icon-loupe-g"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="zNice zForm">
                <form method="POST" id="form_meta_fields">
                    <input type="hidden" name="search_by_meta" value="1">

                    <div class="companyFilter-row">

                        <div class="column">
                            <div class="companyFilter-item">
                                <div class="brokerAccordeon-form">
                                    <div class="companyFilter-item-head blueBg">
                                        <div class="column checkAll"><label><input type="checkbox" name="b1" checked="checked" class="white-chekbox"></label></div>
                                        <div class="column"><i class="icon-sprite icon-accord-man-w"></i></div>
                                        <div class="column">Broker Information</div>
                                    </div>
                                    <div class="companyFilter-item-body">
                                        <div class="inputsGroup">
                                                                                        <div class="zForm-row rightFormat">
                                                <div class="zForm-col">
                                                    <!--? $a = 0;?-->
                                                    <label><input type="checkbox" name="meta[use_info_broker][Broker]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Broker</span></label>
                                                </div>
                                                <div class="zForm-col">
                                                    <select class="box-shadow" name="meta[info_broker][Broker]">
                                                        <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                <option value="ACFX" title="ACFX">ACFX</option>
                                                                                                                <option value="ACM Gold" title="ACM Gold">ACM Gold</option>
                                                                                                                <option value="ADS Securities London Limited" title="ADS Securities London Limited">ADS Securities London Limited</option>
                                                                                                                <option value="Admiral Markets" title="Admiral Markets">Admiral Markets</option>
                                                                                                                <option value="Alpari" title="Alpari">Alpari</option>
                                                                                                                <option value="AvaTrade" title="AvaTrade">AvaTrade</option>
                                                                                                                <option value="EDR Financial Ltd." title="EDR Financial Ltd.">EDR Financial Ltd.</option>
                                                                                                                <option value="Exness Limited" title="Exness Limited">Exness Limited</option>
                                                                                                                <option value="FXPRIMUS" title="FXPRIMUS">FXPRIMUS</option>
                                                                                                                <option value="FXPro" title="FXPro">FXPro</option>
                                                                                                                <option value="Fidelis CM" title="Fidelis CM">Fidelis CM</option>
                                                                                                                <option value="ForexTime" title="ForexTime">ForexTime</option>
                                                                                                                <option value="FxGrow " title="FxGrow ">FxGrow </option>
                                                                                                                <option value="HY Markets  " title="HY Markets  ">HY Markets  </option>
                                                                                                                <option value="ICM Capital Limited" title="ICM Capital Limited">ICM Capital Limited</option>
                                                                                                                <option value="IronFX" title="IronFX">IronFX</option>
                                                                                                                <option value="OctaFX" title="OctaFX">OctaFX</option>
                                                                                                                <option value="Orbex" title="Orbex">Orbex</option>
                                                                                                                <option value="Plus500 LTD" title="Plus500 LTD">Plus500 LTD</option>
                                                                                                                <option value="STO" title="STO">STO</option>
                                                                                                                <option value="Trade360 LTD " title="Trade360 LTD ">Trade360 LTD </option>
                                                                                                                <option value="XM" title="XM">XM</option>
                                                                                                                <option value="eToro" title="eToro">eToro</option>
                                                                                                            </select>
                                                </div>
                                            </div>
                                                                                        <div class="zForm-row rightFormat">
                                                <div class="zForm-col">
                                                    <!--? $a = 0;?-->
                                                    <label><input type="checkbox" name="meta[use_info_broker][Broker URL]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Broker URL</span></label>
                                                </div>
                                                <div class="zForm-col">
                                                    <select class="box-shadow" name="meta[info_broker][Broker URL]">
                                                        <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                <option value="ACFX.com" title="ACFX.com">ACFX.com</option>
                                                                                                                <option value="ACMGold.com" title="ACMGold.com">ACMGold.com</option>
                                                                                                                <option value="ADS-Securities.co.uk " title="ADS-Securities.co.uk ">ADS-Securities.co.uk </option>
                                                                                                                <option value="Admiralmarkets.com" title="Admiralmarkets.com">Admiralmarkets.com</option>
                                                                                                                <option value="Alpari.com" title="Alpari.com">Alpari.com</option>
                                                                                                                <option value="AvaTrade.com" title="AvaTrade.com">AvaTrade.com</option>
                                                                                                                <option value="FXPRIMUS.com" title="FXPRIMUS.com">FXPRIMUS.com</option>
                                                                                                                <option value="FXPro.com" title="FXPro.com">FXPro.com</option>
                                                                                                                <option value="ForexTime.com" title="ForexTime.com">ForexTime.com</option>
                                                                                                                <option value="HYMarkets.com" title="HYMarkets.com">HYMarkets.com</option>
                                                                                                                <option value="IronFX.com" title="IronFX.com">IronFX.com</option>
                                                                                                                <option value="OctaFX.com" title="OctaFX.com">OctaFX.com</option>
                                                                                                                <option value="Orbex.com" title="Orbex.com">Orbex.com</option>
                                                                                                                <option value="Plus500.com" title="Plus500.com">Plus500.com</option>
                                                                                                                <option value="XM.com" title="XM.com">XM.com</option>
                                                                                                                <option value="eToro.com" title="eToro.com">eToro.com</option>
                                                                                                                <option value="exness.com" title="exness.com">exness.com</option>
                                                                                                                <option value="fcmforex.com" title="fcmforex.com">fcmforex.com</option>
                                                                                                                <option value="stofs.com" title="stofs.com">stofs.com</option>
                                                                                                                <option value="trade360.com" title="trade360.com">trade360.com</option>
                                                                                                                <option value="triomarkets.com" title="triomarkets.com">triomarkets.com</option>
                                                                                                                <option value="www.ICMCapital.co.uk" title="www.ICMCapital.co.uk">www.ICMCapital.co.uk</option>
                                                                                                                <option value="www.fxgrow.com" title="www.fxgrow.com">www.fxgrow.com</option>
                                                                                                            </select>
                                                </div>
                                            </div>
                                                                                        <div class="zForm-row rightFormat">
                                                <div class="zForm-col">
                                                    <!--? $a = 0;?-->
                                                    <label><input type="checkbox" name="meta[use_info_broker][Headquarter Country]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Headquarter Country</span></label>
                                                </div>
                                                <div class="zForm-col">
                                                    <select class="box-shadow" name="meta[info_broker][Headquarter Country]">
                                                        <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                <option value="Cyprus" title="Cyprus">Cyprus</option>
                                                                                                                <option value="Ireland" title="Ireland">Ireland</option>
                                                                                                                <option value="South Africa" title="South Africa">South Africa</option>
                                                                                                                <option value="St. Vincent and the Grenadines" title="St. Vincent and the Grenadines">St. Vincent and the Grenadines</option>
                                                                                                                <option value="UK" title="UK">UK</option>
                                                                                                            </select>
                                                </div>
                                            </div>
                                                                                        <div class="zForm-row rightFormat">
                                                <div class="zForm-col">
                                                    <!--? $a = 0;?-->
                                                    <label><input type="checkbox" name="meta[use_info_broker][Headquarter City]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Headquarter City</span></label>
                                                </div>
                                                <div class="zForm-col">
                                                    <select class="box-shadow" name="meta[info_broker][Headquarter City]">
                                                        <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                <option value="Dublin" title="Dublin">Dublin</option>
                                                                                                                <option value="Johannesburg" title="Johannesburg">Johannesburg</option>
                                                                                                                <option value="Kingstown" title="Kingstown">Kingstown</option>
                                                                                                                <option value="Limassol" title="Limassol">Limassol</option>
                                                                                                                <option value="London" title="London">London</option>
                                                                                                            </select>
                                                </div>
                                            </div>
                                                                                        <div class="zForm-row rightFormat">
                                                <div class="zForm-col">
                                                    <!--? $a = 0;?-->
                                                    <label><input type="checkbox" name="meta[use_info_broker][Year Founded]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Year Founded</span></label>
                                                </div>
                                                <div class="zForm-col">
                                                    <select class="box-shadow" name="meta[info_broker][Year Founded]">
                                                        <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                <option value="" title=""></option>
                                                                                                                <option value="1977" title="1977">1977</option>
                                                                                                                <option value="2008" title="2008">2008</option>
                                                                                                                <option value="2009" title="2009">2009</option>
                                                                                                                <option value="2010" title="2010">2010</option>
                                                                                                                <option value="2013" title="2013">2013</option>
                                                                                                                <option value="2014" title="2014">2014</option>
                                                                                                                <option value="2015" title="2015">2015</option>
                                                                                                            </select>
                                                </div>
                                            </div>
                                                                                        <div class="zForm-row rightFormat">
                                                <div class="zForm-col">
                                                    <!--? $a = 0;?-->
                                                    <label><input type="checkbox" name="meta[use_info_broker][Country Presence]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Country Presence</span></label>
                                                </div>
                                                <div class="zForm-col">
                                                    <select class="box-shadow" name="meta[info_broker][Country Presence]">
                                                        <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                <option value="" title=""></option>
                                                                                                                <option value="Australia" title="Australia">Australia</option>
                                                                                                                <option value="China" title="China">China</option>
                                                                                                                <option value="Cyprus" title="Cyprus">Cyprus</option>
                                                                                                                <option value="Hong Kong" title="Hong Kong">Hong Kong</option>
                                                                                                                <option value="India" title="India">India</option>
                                                                                                                <option value="Israel" title="Israel">Israel</option>
                                                                                                                <option value="Italy" title="Italy">Italy</option>
                                                                                                                <option value="Mauritius" title="Mauritius">Mauritius</option>
                                                                                                                <option value="Russia" title="Russia">Russia</option>
                                                                                                                <option value="Singapore" title="Singapore">Singapore</option>
                                                                                                                <option value="South Africa" title="South Africa">South Africa</option>
                                                                                                                <option value="UAE" title="UAE">UAE</option>
                                                                                                                <option value="UK" title="UK">UK</option>
                                                                                                                <option value="US" title="US">US</option>
                                                                                                            </select>
                                                </div>
                                            </div>
                                                                                        <div class="zForm-row rightFormat">
                                                <div class="zForm-col">
                                                    <!--? $a = 0;?-->
                                                    <label><input type="checkbox" name="meta[use_info_broker][Regulation]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Regulation</span></label>
                                                </div>
                                                <div class="zForm-col">
                                                    <select class="box-shadow" name="meta[info_broker][Regulation]">
                                                        <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                <option value="" title=""></option>
                                                                                                                <option value="ASIC" title="ASIC">ASIC</option>
                                                                                                                <option value="Central Bank of Ireland" title="Central Bank of Ireland">Central Bank of Ireland</option>
                                                                                                                <option value="CySEC" title="CySEC">CySEC</option>
                                                                                                                <option value="DFSA" title="DFSA">DFSA</option>
                                                                                                                <option value="FCA" title="FCA">FCA</option>
                                                                                                                <option value="FSA (St. Vincent and the Grenadines)" title="FSA (St. Vincent and the Grenadines)">FSA (St. Vincent and the Grenadines)</option>
                                                                                                                <option value="FSA Japan" title="FSA Japan">FSA Japan</option>
                                                                                                                <option value="FSC" title="FSC">FSC</option>
                                                                                                                <option value="FSC BVI" title="FSC BVI">FSC BVI</option>
                                                                                                                <option value="FSP" title="FSP">FSP</option>
                                                                                                                <option value="IFSC" title="IFSC">IFSC</option>
                                                                                                                <option value="Suspended" title="Suspended">Suspended</option>
                                                                                                            </select>
                                                </div>
                                            </div>
                                                                                        <div class="zForm-row rightFormat">
                                                <div class="zForm-col">
                                                    <!--? $a = 0;?-->
                                                    <label><input type="checkbox" name="meta[use_info_broker][Type of Broker]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Type of Broker</span></label>
                                                </div>
                                                <div class="zForm-col">
                                                    <select class="box-shadow" name="meta[info_broker][Type of Broker]">
                                                        <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                <option value="DMA" title="DMA">DMA</option>
                                                                                                                <option value="ECN" title="ECN">ECN</option>
                                                                                                                <option value="Market Maker" title="Market Maker">Market Maker</option>
                                                                                                                <option value="STP" title="STP">STP</option>
                                                                                                                <option value="White Label" title="White Label">White Label</option>
                                                                                                            </select>
                                                </div>
                                            </div>
                                                                                        <div class="zForm-row rightFormat">
                                                <div class="zForm-col">
                                                    <!--? $a = 0;?-->
                                                    <label><input type="checkbox" name="meta[use_info_broker][Language]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Language</span></label>
                                                </div>
                                                <div class="zForm-col">
                                                    <select class="box-shadow" name="meta[info_broker][Language]">
                                                        <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                <option value="Arabic" title="Arabic">Arabic</option>
                                                                                                                <option value="Bengali" title="Bengali">Bengali</option>
                                                                                                                <option value="Bengoli" title="Bengoli">Bengoli</option>
                                                                                                                <option value="Bulgarian" title="Bulgarian">Bulgarian</option>
                                                                                                                <option value="Chinese" title="Chinese">Chinese</option>
                                                                                                                <option value="Chinese(Simplified)" title="Chinese(Simplified)">Chinese(Simplified)</option>
                                                                                                                <option value="Chinese(Traditional)" title="Chinese(Traditional)">Chinese(Traditional)</option>
                                                                                                                <option value="Croatian" title="Croatian">Croatian</option>
                                                                                                                <option value="Czech" title="Czech">Czech</option>
                                                                                                                <option value="Danish" title="Danish">Danish</option>
                                                                                                                <option value="Dutch" title="Dutch">Dutch</option>
                                                                                                                <option value="English" title="English">English</option>
                                                                                                                <option value="Estonian" title="Estonian">Estonian</option>
                                                                                                                <option value="Farsi" title="Farsi">Farsi</option>
                                                                                                                <option value="Finish" title="Finish">Finish</option>
                                                                                                                <option value="French" title="French">French</option>
                                                                                                                <option value="German" title="German">German</option>
                                                                                                                <option value="Greek" title="Greek">Greek</option>
                                                                                                                <option value="Hebrew" title="Hebrew">Hebrew</option>
                                                                                                                <option value="Hindi" title="Hindi">Hindi</option>
                                                                                                                <option value="Hungarian" title="Hungarian">Hungarian</option>
                                                                                                                <option value="Icelandic" title="Icelandic">Icelandic</option>
                                                                                                                <option value="Indonesian" title="Indonesian">Indonesian</option>
                                                                                                                <option value="Italian" title="Italian">Italian</option>
                                                                                                                <option value="Japanese" title="Japanese">Japanese</option>
                                                                                                                <option value="Kannada" title="Kannada">Kannada</option>
                                                                                                                <option value="Korean" title="Korean">Korean</option>
                                                                                                                <option value="Latvian" title="Latvian">Latvian</option>
                                                                                                                <option value="Lithuanian" title="Lithuanian">Lithuanian</option>
                                                                                                                <option value="Malay" title="Malay">Malay</option>
                                                                                                                <option value="Maltese" title="Maltese">Maltese</option>
                                                                                                                <option value="Norwegian" title="Norwegian">Norwegian</option>
                                                                                                                <option value="Persian" title="Persian">Persian</option>
                                                                                                                <option value="Polish" title="Polish">Polish</option>
                                                                                                                <option value="Portuguese" title="Portuguese">Portuguese</option>
                                                                                                                <option value="Romanian" title="Romanian">Romanian</option>
                                                                                                                <option value="Russian" title="Russian">Russian</option>
                                                                                                                <option value="Serbian" title="Serbian">Serbian</option>
                                                                                                                <option value="Slovak" title="Slovak">Slovak</option>
                                                                                                                <option value="Slovenian" title="Slovenian">Slovenian</option>
                                                                                                                <option value="Spanish" title="Spanish">Spanish</option>
                                                                                                                <option value="Swedish" title="Swedish">Swedish</option>
                                                                                                                <option value="Tamil" title="Tamil">Tamil</option>
                                                                                                                <option value="Thai" title="Thai">Thai</option>
                                                                                                                <option value="Turkish" title="Turkish">Turkish</option>
                                                                                                                <option value="Urdu" title="Urdu">Urdu</option>
                                                                                                                <option value="Vietnamese" title="Vietnamese">Vietnamese</option>
                                                                                                            </select>
                                                </div>
                                            </div>
                                                                                        <div class="zForm-row rightFormat">
                                                <div class="zForm-col">
                                                    <!--? $a = 0;?-->
                                                    <label><input type="checkbox" name="meta[use_info_broker][US Clients]" checked="checked" class="gray-chekbox"> <span class="zForm-text">US Clients</span></label>
                                                </div>
                                                <div class="zForm-col">
                                                    <select class="box-shadow" name="meta[info_broker][US Clients]">
                                                        <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                <option value="No" title="No">No</option>
                                                                                                            </select>
                                                </div>
                                            </div>
                                                                                        <div class="zForm-row rightFormat">
                                                <div class="zForm-col">
                                                    <!--? $a = 0;?-->
                                                    <label><input type="checkbox" name="meta[use_info_broker][Contact options  ]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Contact options  </span></label>
                                                </div>
                                                <div class="zForm-col">
                                                    <select class="box-shadow" name="meta[info_broker][Contact options  ]">
                                                        <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                <option value="" title=""></option>
                                                                                                                <option value="Address" title="Address">Address</option>
                                                                                                                <option value="Call back request" title="Call back request">Call back request</option>
                                                                                                                <option value="Contact-us form" title="Contact-us form">Contact-us form</option>
                                                                                                                <option value="Email" title="Email">Email</option>
                                                                                                                <option value="Fax" title="Fax">Fax</option>
                                                                                                                <option value="Free click to call" title="Free click to call">Free click to call</option>
                                                                                                                <option value="Live Chat" title="Live Chat">Live Chat</option>
                                                                                                                <option value="Mail" title="Mail">Mail</option>
                                                                                                                <option value="SMS" title="SMS">SMS</option>
                                                                                                                <option value="Telephone" title="Telephone">Telephone</option>
                                                                                                            </select>
                                                </div>
                                            </div>
                                                                                        <div class="zForm-row rightFormat">
                                                <div class="zForm-col">
                                                    <!--? $a = 0;?-->
                                                    <label><input type="checkbox" name="meta[use_info_broker][Public listing]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Public listing</span></label>
                                                </div>
                                                <div class="zForm-col">
                                                    <select class="box-shadow" name="meta[info_broker][Public listing]">
                                                        <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                <option value="AIM LSE" title="AIM LSE">AIM LSE</option>
                                                                                                                <option value="N/A" title="N/A">N/A</option>
                                                                                                            </select>
                                                </div>
                                            </div>
                                                                                        <div class="zForm-row rightFormat">
                                                <div class="zForm-col">
                                                    <!--? $a = 0;?-->
                                                    <label><input type="checkbox" name="meta[use_info_broker][Technical Support]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Technical Support</span></label>
                                                </div>
                                                <div class="zForm-col">
                                                    <select class="box-shadow" name="meta[info_broker][Technical Support]">
                                                        <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                <option value="24/5" title="24/5">24/5</option>
                                                                                                                <option value="24/7" title="24/7">24/7</option>
                                                                                                                <option value="During Asian Session" title="During Asian Session">During Asian Session</option>
                                                                                                                <option value="During European Session" title="During European Session">During European Session</option>
                                                                                                                <option value="During US Session" title="During US Session">During US Session</option>
                                                                                                            </select>
                                                </div>
                                            </div>
                                                                                        <div class="zForm-row rightFormat">
                                                <div class="zForm-col">
                                                    <!--? $a = 0;?-->
                                                    <label><input type="checkbox" name="meta[use_info_broker][Spread betting]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Spread betting</span></label>
                                                </div>
                                                <div class="zForm-col">
                                                    <select class="box-shadow" name="meta[info_broker][Spread betting]">
                                                        <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                <option value="No" title="No">No</option>
                                                                                                                <option value="Yes" title="Yes">Yes</option>
                                                                                                            </select>
                                                </div>
                                            </div>
                                                                                        <div class="zForm-row rightFormat">
                                                <div class="zForm-col">
                                                    <!--? $a = 0;?-->
                                                    <label><input type="checkbox" name="meta[use_info_broker][Binary Options]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Binary Options</span></label>
                                                </div>
                                                <div class="zForm-col">
                                                    <select class="box-shadow" name="meta[info_broker][Binary Options]">
                                                        <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                <option value="No" title="No">No</option>
                                                                                                            </select>
                                                </div>
                                            </div>
                                                                                        <div class="zForm-row rightFormat">
                                                <div class="zForm-col">
                                                    <!--? $a = 0;?-->
                                                    <label><input type="checkbox" name="meta[use_info_broker][Blocked countries]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Blocked countries</span></label>
                                                </div>
                                                <div class="zForm-col">
                                                    <select class="box-shadow" name="meta[info_broker][Blocked countries]">
                                                        <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                <option value="Afghanistan" title="Afghanistan">Afghanistan</option>
                                                                                                                <option value="Albania" title="Albania">Albania</option>
                                                                                                                <option value="Algeria" title="Algeria">Algeria</option>
                                                                                                                <option value="Angola" title="Angola">Angola</option>
                                                                                                                <option value="Antigua and Barbuda" title="Antigua and Barbuda">Antigua and Barbuda</option>
                                                                                                                <option value="Armenia" title="Armenia">Armenia</option>
                                                                                                                <option value="Australia" title="Australia">Australia</option>
                                                                                                                <option value="Azerbaijan" title="Azerbaijan">Azerbaijan</option>
                                                                                                                <option value="Bahamas" title="Bahamas">Bahamas</option>
                                                                                                                <option value="Bangladesh" title="Bangladesh">Bangladesh</option>
                                                                                                                <option value="Barbados" title="Barbados">Barbados</option>
                                                                                                                <option value="Belarus" title="Belarus">Belarus</option>
                                                                                                                <option value="Belize" title="Belize">Belize</option>
                                                                                                                <option value="Benin" title="Benin">Benin</option>
                                                                                                                <option value="Bhutan" title="Bhutan">Bhutan</option>
                                                                                                                <option value="Bolivia" title="Bolivia">Bolivia</option>
                                                                                                                <option value="Bosnia and Herzegovina" title="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                                                                                <option value="Botswana" title="Botswana">Botswana</option>
                                                                                                                <option value="Brazil" title="Brazil">Brazil</option>
                                                                                                                <option value="Brunei" title="Brunei">Brunei</option>
                                                                                                                <option value="Burkina Faso" title="Burkina Faso">Burkina Faso</option>
                                                                                                                <option value="Burundi" title="Burundi">Burundi</option>
                                                                                                                <option value="Cabo Verde" title="Cabo Verde">Cabo Verde</option>
                                                                                                                <option value="Cambodia" title="Cambodia">Cambodia</option>
                                                                                                                <option value="Cameroon" title="Cameroon">Cameroon</option>
                                                                                                                <option value="Canada" title="Canada">Canada</option>
                                                                                                                <option value="Central African Republic" title="Central African Republic">Central African Republic</option>
                                                                                                                <option value="Chad" title="Chad">Chad</option>
                                                                                                                <option value="China" title="China">China</option>
                                                                                                                <option value="Comoros" title="Comoros">Comoros</option>
                                                                                                                <option value="Congo" title="Congo">Congo</option>
                                                                                                                <option value="Costa Rica" title="Costa Rica">Costa Rica</option>
                                                                                                                <option value="Cote d'Ivoire" title="Cote d'Ivoire">Cote d'Ivoire</option>
                                                                                                                <option value="Cuba" title="Cuba">Cuba</option>
                                                                                                                <option value="Cyprus" title="Cyprus">Cyprus</option>
                                                                                                                <option value="DR Congo" title="DR Congo">DR Congo</option>
                                                                                                                <option value="Djibouti" title="Djibouti">Djibouti</option>
                                                                                                                <option value="Dominica" title="Dominica">Dominica</option>
                                                                                                                <option value="Dominican Republic" title="Dominican Republic">Dominican Republic</option>
                                                                                                                <option value="Ecuador" title="Ecuador">Ecuador</option>
                                                                                                                <option value="Egypt" title="Egypt">Egypt</option>
                                                                                                                <option value="El Salvador" title="El Salvador">El Salvador</option>
                                                                                                                <option value="Equatorial Guinea" title="Equatorial Guinea">Equatorial Guinea</option>
                                                                                                                <option value="Eritrea" title="Eritrea">Eritrea</option>
                                                                                                                <option value="Ethiopia" title="Ethiopia">Ethiopia</option>
                                                                                                                <option value="Fiji" title="Fiji">Fiji</option>
                                                                                                                <option value="Gabon" title="Gabon">Gabon</option>
                                                                                                                <option value="Gambia" title="Gambia">Gambia</option>
                                                                                                                <option value="Gaza Strip" title="Gaza Strip">Gaza Strip</option>
                                                                                                                <option value="Georgia" title="Georgia">Georgia</option>
                                                                                                                <option value="Ghana" title="Ghana">Ghana</option>
                                                                                                                <option value="Grenada" title="Grenada">Grenada</option>
                                                                                                                <option value="Guatemala" title="Guatemala">Guatemala</option>
                                                                                                                <option value="Guinea" title="Guinea">Guinea</option>
                                                                                                                <option value="Guinea-Bissau" title="Guinea-Bissau">Guinea-Bissau</option>
                                                                                                                <option value="Guyana" title="Guyana">Guyana</option>
                                                                                                                <option value="Haiti" title="Haiti">Haiti</option>
                                                                                                                <option value="Honduras" title="Honduras">Honduras</option>
                                                                                                                <option value="Hong Kong" title="Hong Kong">Hong Kong</option>
                                                                                                                <option value="Indonesia" title="Indonesia">Indonesia</option>
                                                                                                                <option value="Iran" title="Iran">Iran</option>
                                                                                                                <option value="Iraq" title="Iraq">Iraq</option>
                                                                                                                <option value="Israel" title="Israel">Israel</option>
                                                                                                                <option value="Ivory Coast" title="Ivory Coast">Ivory Coast</option>
                                                                                                                <option value="Jamaica" title="Jamaica">Jamaica</option>
                                                                                                                <option value="Japan" title="Japan">Japan</option>
                                                                                                                <option value="Jordan" title="Jordan">Jordan</option>
                                                                                                                <option value="Kazakhstan" title="Kazakhstan">Kazakhstan</option>
                                                                                                                <option value="Kenya" title="Kenya">Kenya</option>
                                                                                                                <option value="Kiribati" title="Kiribati">Kiribati</option>
                                                                                                                <option value="Kosovo" title="Kosovo">Kosovo</option>
                                                                                                                <option value="Kyrgyzstan" title="Kyrgyzstan">Kyrgyzstan</option>
                                                                                                                <option value="Laos" title="Laos">Laos</option>
                                                                                                                <option value="Lebanon" title="Lebanon">Lebanon</option>
                                                                                                                <option value="Lesotho" title="Lesotho">Lesotho</option>
                                                                                                                <option value="Liberia" title="Liberia">Liberia</option>
                                                                                                                <option value="Libya" title="Libya">Libya</option>
                                                                                                                <option value="Macedonia" title="Macedonia">Macedonia</option>
                                                                                                                <option value="Madagascar" title="Madagascar">Madagascar</option>
                                                                                                                <option value="Malawi" title="Malawi">Malawi</option>
                                                                                                                <option value="Maldives" title="Maldives">Maldives</option>
                                                                                                                <option value="Mali" title="Mali">Mali</option>
                                                                                                                <option value="Marshall Islands" title="Marshall Islands">Marshall Islands</option>
                                                                                                                <option value="Mauritania" title="Mauritania">Mauritania</option>
                                                                                                                <option value="Mauritius" title="Mauritius">Mauritius</option>
                                                                                                                <option value="Micronesia" title="Micronesia">Micronesia</option>
                                                                                                                <option value="Moldova" title="Moldova">Moldova</option>
                                                                                                                <option value="Mongolia" title="Mongolia">Mongolia</option>
                                                                                                                <option value="Montenegro" title="Montenegro">Montenegro</option>
                                                                                                                <option value="Morocco" title="Morocco">Morocco</option>
                                                                                                                <option value="Mozambique" title="Mozambique">Mozambique</option>
                                                                                                                <option value="Myanmar" title="Myanmar">Myanmar</option>
                                                                                                                <option value="Myanmar (Burma)" title="Myanmar (Burma)">Myanmar (Burma)</option>
                                                                                                                <option value="N.Korea" title="N.Korea">N.Korea</option>
                                                                                                                <option value="Namibia" title="Namibia">Namibia</option>
                                                                                                                <option value="Nauru" title="Nauru">Nauru</option>
                                                                                                                <option value="Nepal" title="Nepal">Nepal</option>
                                                                                                                <option value="New Zealand" title="New Zealand">New Zealand</option>
                                                                                                                <option value="Nicaragua" title="Nicaragua">Nicaragua</option>
                                                                                                                <option value="Niger" title="Niger">Niger</option>
                                                                                                                <option value="Nigeria" title="Nigeria">Nigeria</option>
                                                                                                                <option value="North Korea" title="North Korea">North Korea</option>
                                                                                                                <option value="Pakistan" title="Pakistan">Pakistan</option>
                                                                                                                <option value="Palau" title="Palau">Palau</option>
                                                                                                                <option value="Palestine" title="Palestine">Palestine</option>
                                                                                                                <option value="Panama" title="Panama">Panama</option>
                                                                                                                <option value="Papua New Guinea" title="Papua New Guinea">Papua New Guinea</option>
                                                                                                                <option value="Paraguay" title="Paraguay">Paraguay</option>
                                                                                                                <option value="Peru" title="Peru">Peru</option>
                                                                                                                <option value="Philippines" title="Philippines">Philippines</option>
                                                                                                                <option value="Russia" title="Russia">Russia</option>
                                                                                                                <option value="Rwanda" title="Rwanda">Rwanda</option>
                                                                                                                <option value="Samoa" title="Samoa">Samoa</option>
                                                                                                                <option value="San Marino" title="San Marino">San Marino</option>
                                                                                                                <option value="Sao Tome and Principe" title="Sao Tome and Principe">Sao Tome and Principe</option>
                                                                                                                <option value="Senegal" title="Senegal">Senegal</option>
                                                                                                                <option value="Serbia" title="Serbia">Serbia</option>
                                                                                                                <option value="Seychelles" title="Seychelles">Seychelles</option>
                                                                                                                <option value="Sierra Leone" title="Sierra Leone">Sierra Leone</option>
                                                                                                                <option value="Singapore" title="Singapore">Singapore</option>
                                                                                                                <option value="Solomon Islands" title="Solomon Islands">Solomon Islands</option>
                                                                                                                <option value="Somalia" title="Somalia">Somalia</option>
                                                                                                                <option value="South Korea" title="South Korea">South Korea</option>
                                                                                                                <option value="South Sudan" title="South Sudan">South Sudan</option>
                                                                                                                <option value="Sri Lanka" title="Sri Lanka">Sri Lanka</option>
                                                                                                                <option value="St. Kitts and Nevis" title="St. Kitts and Nevis">St. Kitts and Nevis</option>
                                                                                                                <option value="St. Lucia" title="St. Lucia">St. Lucia</option>
                                                                                                                <option value="St. Vincent and The Grenadines" title="St. Vincent and The Grenadines">St. Vincent and The Grenadines</option>
                                                                                                                <option value="Sudan" title="Sudan">Sudan</option>
                                                                                                                <option value="Suriname" title="Suriname">Suriname</option>
                                                                                                                <option value="Swaziland" title="Swaziland">Swaziland</option>
                                                                                                                <option value="Switzerland" title="Switzerland">Switzerland</option>
                                                                                                                <option value="Syria" title="Syria">Syria</option>
                                                                                                                <option value="Tajikistan" title="Tajikistan">Tajikistan</option>
                                                                                                                <option value="Tanzania" title="Tanzania">Tanzania</option>
                                                                                                                <option value="Thailand" title="Thailand">Thailand</option>
                                                                                                                <option value="Timor-Leste" title="Timor-Leste">Timor-Leste</option>
                                                                                                                <option value="Togo" title="Togo">Togo</option>
                                                                                                                <option value="Tonga" title="Tonga">Tonga</option>
                                                                                                                <option value="Trinidad and Tobago" title="Trinidad and Tobago">Trinidad and Tobago</option>
                                                                                                                <option value="Tunisia" title="Tunisia">Tunisia</option>
                                                                                                                <option value="Turkey" title="Turkey">Turkey</option>
                                                                                                                <option value="Turkmenistan" title="Turkmenistan">Turkmenistan</option>
                                                                                                                <option value="Tuvalu" title="Tuvalu">Tuvalu</option>
                                                                                                                <option value="US" title="US">US</option>
                                                                                                                <option value="USA" title="USA">USA</option>
                                                                                                                <option value="Uganda" title="Uganda">Uganda</option>
                                                                                                                <option value="Ukraine" title="Ukraine">Ukraine</option>
                                                                                                                <option value="Uzbekistan" title="Uzbekistan">Uzbekistan</option>
                                                                                                                <option value="Vanuatu" title="Vanuatu">Vanuatu</option>
                                                                                                                <option value="Vatican City" title="Vatican City">Vatican City</option>
                                                                                                                <option value="Venezuela" title="Venezuela">Venezuela</option>
                                                                                                                <option value="Vietnam" title="Vietnam">Vietnam</option>
                                                                                                                <option value="Yemen" title="Yemen">Yemen</option>
                                                                                                                <option value="Zambia" title="Zambia">Zambia</option>
                                                                                                                <option value="Zimbabwe" title="Zimbabwe">Zimbabwe</option>
                                                                                                            </select>
                                                </div>
                                            </div>
                                                                                        <div class="zForm-row rightFormat">
                                                <div class="zForm-col">
                                                    <!--? $a = 0;?-->
                                                    <label><input type="checkbox" name="meta[use_info_broker][Accepted countries]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Accepted countries</span></label>
                                                </div>
                                                <div class="zForm-col">
                                                    <select class="box-shadow" name="meta[info_broker][Accepted countries]">
                                                        <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                <option value="Afghanistan" title="Afghanistan">Afghanistan</option>
                                                                                                                <option value="Albania" title="Albania">Albania</option>
                                                                                                                <option value="Algeria" title="Algeria">Algeria</option>
                                                                                                                <option value="Andorra" title="Andorra">Andorra</option>
                                                                                                                <option value="Angola" title="Angola">Angola</option>
                                                                                                                <option value="Antigua and Barbuda" title="Antigua and Barbuda">Antigua and Barbuda</option>
                                                                                                                <option value="Argentina" title="Argentina">Argentina</option>
                                                                                                                <option value="Armenia" title="Armenia">Armenia</option>
                                                                                                                <option value="Australia" title="Australia">Australia</option>
                                                                                                                <option value="Austria" title="Austria">Austria</option>
                                                                                                                <option value="Azerbaijan" title="Azerbaijan">Azerbaijan</option>
                                                                                                                <option value="Bahamas" title="Bahamas">Bahamas</option>
                                                                                                                <option value="Bahrain" title="Bahrain">Bahrain</option>
                                                                                                                <option value="Bangladesh" title="Bangladesh">Bangladesh</option>
                                                                                                                <option value="Barbados" title="Barbados">Barbados</option>
                                                                                                                <option value="Belarus" title="Belarus">Belarus</option>
                                                                                                                <option value="Belgium" title="Belgium">Belgium</option>
                                                                                                                <option value="Belize" title="Belize">Belize</option>
                                                                                                                <option value="Benin" title="Benin">Benin</option>
                                                                                                                <option value="Bhutan" title="Bhutan">Bhutan</option>
                                                                                                                <option value="Bolivia" title="Bolivia">Bolivia</option>
                                                                                                                <option value="Bosnia and Herzegovina" title="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                                                                                <option value="Botswana" title="Botswana">Botswana</option>
                                                                                                                <option value="Brazil" title="Brazil">Brazil</option>
                                                                                                                <option value="Brunei" title="Brunei">Brunei</option>
                                                                                                                <option value="Bulgaria" title="Bulgaria">Bulgaria</option>
                                                                                                                <option value="Burkina Faso" title="Burkina Faso">Burkina Faso</option>
                                                                                                                <option value="Burundi" title="Burundi">Burundi</option>
                                                                                                                <option value="Cabo Verde" title="Cabo Verde">Cabo Verde</option>
                                                                                                                <option value="Cambodia" title="Cambodia">Cambodia</option>
                                                                                                                <option value="Cameroon" title="Cameroon">Cameroon</option>
                                                                                                                <option value="Canada" title="Canada">Canada</option>
                                                                                                                <option value="Central African Republic" title="Central African Republic">Central African Republic</option>
                                                                                                                <option value="Chad" title="Chad">Chad</option>
                                                                                                                <option value="Chile" title="Chile">Chile</option>
                                                                                                                <option value="China" title="China">China</option>
                                                                                                                <option value="Colombia" title="Colombia">Colombia</option>
                                                                                                                <option value="Comoros" title="Comoros">Comoros</option>
                                                                                                                <option value="Congo" title="Congo">Congo</option>
                                                                                                                <option value="Costa Rica" title="Costa Rica">Costa Rica</option>
                                                                                                                <option value="Cote d'Ivoire" title="Cote d'Ivoire">Cote d'Ivoire</option>
                                                                                                                <option value="Croatia" title="Croatia">Croatia</option>
                                                                                                                <option value="Cuba" title="Cuba">Cuba</option>
                                                                                                                <option value="Cyprus" title="Cyprus">Cyprus</option>
                                                                                                                <option value="Czech Republic" title="Czech Republic">Czech Republic</option>
                                                                                                                <option value="Denmark" title="Denmark">Denmark</option>
                                                                                                                <option value="Djibouti" title="Djibouti">Djibouti</option>
                                                                                                                <option value="Dominica" title="Dominica">Dominica</option>
                                                                                                                <option value="Dominican Republic" title="Dominican Republic">Dominican Republic</option>
                                                                                                                <option value="Ecuador" title="Ecuador">Ecuador</option>
                                                                                                                <option value="Egypt" title="Egypt">Egypt</option>
                                                                                                                <option value="El Salvador" title="El Salvador">El Salvador</option>
                                                                                                                <option value="Equatorial Guinea" title="Equatorial Guinea">Equatorial Guinea</option>
                                                                                                                <option value="Eritrea" title="Eritrea">Eritrea</option>
                                                                                                                <option value="Estonia" title="Estonia">Estonia</option>
                                                                                                                <option value="Ethiopia" title="Ethiopia">Ethiopia</option>
                                                                                                                <option value="Fiji" title="Fiji">Fiji</option>
                                                                                                                <option value="Finland" title="Finland">Finland</option>
                                                                                                                <option value="France" title="France">France</option>
                                                                                                                <option value="Gabon" title="Gabon">Gabon</option>
                                                                                                                <option value="Gambia" title="Gambia">Gambia</option>
                                                                                                                <option value="Georgia" title="Georgia">Georgia</option>
                                                                                                                <option value="Germany" title="Germany">Germany</option>
                                                                                                                <option value="Ghana" title="Ghana">Ghana</option>
                                                                                                                <option value="Gibraltar" title="Gibraltar">Gibraltar</option>
                                                                                                                <option value="Greece" title="Greece">Greece</option>
                                                                                                                <option value="Grenada" title="Grenada">Grenada</option>
                                                                                                                <option value="Guatemala" title="Guatemala">Guatemala</option>
                                                                                                                <option value="Guinea" title="Guinea">Guinea</option>
                                                                                                                <option value="Guinea-Bissau" title="Guinea-Bissau">Guinea-Bissau</option>
                                                                                                                <option value="Guyana" title="Guyana">Guyana</option>
                                                                                                                <option value="Haiti" title="Haiti">Haiti</option>
                                                                                                                <option value="Honduras" title="Honduras">Honduras</option>
                                                                                                                <option value="Hong Kong" title="Hong Kong">Hong Kong</option>
                                                                                                                <option value="Hungary" title="Hungary">Hungary</option>
                                                                                                                <option value="Iceland" title="Iceland">Iceland</option>
                                                                                                                <option value="India" title="India">India</option>
                                                                                                                <option value="Indonesia" title="Indonesia">Indonesia</option>
                                                                                                                <option value="Iran" title="Iran">Iran</option>
                                                                                                                <option value="Iraq" title="Iraq">Iraq</option>
                                                                                                                <option value="Ireland" title="Ireland">Ireland</option>
                                                                                                                <option value="Isle of Man" title="Isle of Man">Isle of Man</option>
                                                                                                                <option value="Israel" title="Israel">Israel</option>
                                                                                                                <option value="Italy" title="Italy">Italy</option>
                                                                                                                <option value="Jamaica" title="Jamaica">Jamaica</option>
                                                                                                                <option value="Japan" title="Japan">Japan</option>
                                                                                                                <option value="Jordan" title="Jordan">Jordan</option>
                                                                                                                <option value="Kazakhstan" title="Kazakhstan">Kazakhstan</option>
                                                                                                                <option value="Kenya" title="Kenya">Kenya</option>
                                                                                                                <option value="Kiribati" title="Kiribati">Kiribati</option>
                                                                                                                <option value="Kosovo" title="Kosovo">Kosovo</option>
                                                                                                                <option value="Kuwait" title="Kuwait">Kuwait</option>
                                                                                                                <option value="Kyrgyzstan" title="Kyrgyzstan">Kyrgyzstan</option>
                                                                                                                <option value="Laos" title="Laos">Laos</option>
                                                                                                                <option value="Latvia" title="Latvia">Latvia</option>
                                                                                                                <option value="Lebanon" title="Lebanon">Lebanon</option>
                                                                                                                <option value="Lesotho" title="Lesotho">Lesotho</option>
                                                                                                                <option value="Liberia" title="Liberia">Liberia</option>
                                                                                                                <option value="Libya" title="Libya">Libya</option>
                                                                                                                <option value="Liechtenstein" title="Liechtenstein">Liechtenstein</option>
                                                                                                                <option value="Lithuania" title="Lithuania">Lithuania</option>
                                                                                                                <option value="Luxembourg" title="Luxembourg">Luxembourg</option>
                                                                                                                <option value="Macau" title="Macau">Macau</option>
                                                                                                                <option value="Macedonia" title="Macedonia">Macedonia</option>
                                                                                                                <option value="Madagascar" title="Madagascar">Madagascar</option>
                                                                                                                <option value="Malawi" title="Malawi">Malawi</option>
                                                                                                                <option value="Malaysia" title="Malaysia">Malaysia</option>
                                                                                                                <option value="Maldives" title="Maldives">Maldives</option>
                                                                                                                <option value="Mali" title="Mali">Mali</option>
                                                                                                                <option value="Malta" title="Malta">Malta</option>
                                                                                                                <option value="Marshall Islands" title="Marshall Islands">Marshall Islands</option>
                                                                                                                <option value="Mauritania" title="Mauritania">Mauritania</option>
                                                                                                                <option value="Mauritius" title="Mauritius">Mauritius</option>
                                                                                                                <option value="Mexico" title="Mexico">Mexico</option>
                                                                                                                <option value="Micronesia" title="Micronesia">Micronesia</option>
                                                                                                                <option value="Moldova" title="Moldova">Moldova</option>
                                                                                                                <option value="Monaco" title="Monaco">Monaco</option>
                                                                                                                <option value="Mongolia" title="Mongolia">Mongolia</option>
                                                                                                                <option value="Montenegro" title="Montenegro">Montenegro</option>
                                                                                                                <option value="Morocco" title="Morocco">Morocco</option>
                                                                                                                <option value="Mozambique" title="Mozambique">Mozambique</option>
                                                                                                                <option value="Myanmar (Burma)" title="Myanmar (Burma)">Myanmar (Burma)</option>
                                                                                                                <option value="Namibia" title="Namibia">Namibia</option>
                                                                                                                <option value="Nauru" title="Nauru">Nauru</option>
                                                                                                                <option value="Nepal" title="Nepal">Nepal</option>
                                                                                                                <option value="Netherlands" title="Netherlands">Netherlands</option>
                                                                                                                <option value="New Zealand" title="New Zealand">New Zealand</option>
                                                                                                                <option value="Nicaragua" title="Nicaragua">Nicaragua</option>
                                                                                                                <option value="Niger" title="Niger">Niger</option>
                                                                                                                <option value="Nigeria" title="Nigeria">Nigeria</option>
                                                                                                                <option value="North Korea" title="North Korea">North Korea</option>
                                                                                                                <option value="Norway" title="Norway">Norway</option>
                                                                                                                <option value="Oman" title="Oman">Oman</option>
                                                                                                                <option value="Pakistan" title="Pakistan">Pakistan</option>
                                                                                                                <option value="Palau" title="Palau">Palau</option>
                                                                                                                <option value="Palestine" title="Palestine">Palestine</option>
                                                                                                                <option value="Panama" title="Panama">Panama</option>
                                                                                                                <option value="Papua New Guinea" title="Papua New Guinea">Papua New Guinea</option>
                                                                                                                <option value="Paraguay" title="Paraguay">Paraguay</option>
                                                                                                                <option value="Peru" title="Peru">Peru</option>
                                                                                                                <option value="Philippines" title="Philippines">Philippines</option>
                                                                                                                <option value="Poland" title="Poland">Poland</option>
                                                                                                                <option value="Portugal" title="Portugal">Portugal</option>
                                                                                                                <option value="Qatar" title="Qatar">Qatar</option>
                                                                                                                <option value="Romania" title="Romania">Romania</option>
                                                                                                                <option value="Russia" title="Russia">Russia</option>
                                                                                                                <option value="Rwanda" title="Rwanda">Rwanda</option>
                                                                                                                <option value="Samoa" title="Samoa">Samoa</option>
                                                                                                                <option value="San Marino" title="San Marino">San Marino</option>
                                                                                                                <option value="Sao Tome and Principe" title="Sao Tome and Principe">Sao Tome and Principe</option>
                                                                                                                <option value="Saudi Arabia" title="Saudi Arabia">Saudi Arabia</option>
                                                                                                                <option value="Senegal" title="Senegal">Senegal</option>
                                                                                                                <option value="Serbia" title="Serbia">Serbia</option>
                                                                                                                <option value="Seychelles" title="Seychelles">Seychelles</option>
                                                                                                                <option value="Sierra Leone" title="Sierra Leone">Sierra Leone</option>
                                                                                                                <option value="Singapore" title="Singapore">Singapore</option>
                                                                                                                <option value="Slovakia" title="Slovakia">Slovakia</option>
                                                                                                                <option value="Slovenia" title="Slovenia">Slovenia</option>
                                                                                                                <option value="Solomon Islands" title="Solomon Islands">Solomon Islands</option>
                                                                                                                <option value="Somalia" title="Somalia">Somalia</option>
                                                                                                                <option value="South Africa" title="South Africa">South Africa</option>
                                                                                                                <option value="South Korea" title="South Korea">South Korea</option>
                                                                                                                <option value="South Sudan" title="South Sudan">South Sudan</option>
                                                                                                                <option value="Spain" title="Spain">Spain</option>
                                                                                                                <option value="Sri Lanka" title="Sri Lanka">Sri Lanka</option>
                                                                                                                <option value="St. Kitts and Nevis" title="St. Kitts and Nevis">St. Kitts and Nevis</option>
                                                                                                                <option value="St. Lucia" title="St. Lucia">St. Lucia</option>
                                                                                                                <option value="St. Vincent and The Grenadines" title="St. Vincent and The Grenadines">St. Vincent and The Grenadines</option>
                                                                                                                <option value="Sudan" title="Sudan">Sudan</option>
                                                                                                                <option value="Suriname" title="Suriname">Suriname</option>
                                                                                                                <option value="Swaziland" title="Swaziland">Swaziland</option>
                                                                                                                <option value="Sweden" title="Sweden">Sweden</option>
                                                                                                                <option value="Switzerland" title="Switzerland">Switzerland</option>
                                                                                                                <option value="Syria" title="Syria">Syria</option>
                                                                                                                <option value="Taiwan" title="Taiwan">Taiwan</option>
                                                                                                                <option value="Tajikistan" title="Tajikistan">Tajikistan</option>
                                                                                                                <option value="Tanzania" title="Tanzania">Tanzania</option>
                                                                                                                <option value="Thailand" title="Thailand">Thailand</option>
                                                                                                                <option value="Timor-Leste" title="Timor-Leste">Timor-Leste</option>
                                                                                                                <option value="Togo" title="Togo">Togo</option>
                                                                                                                <option value="Tonga" title="Tonga">Tonga</option>
                                                                                                                <option value="Trinidad and Tobago" title="Trinidad and Tobago">Trinidad and Tobago</option>
                                                                                                                <option value="Tunisia" title="Tunisia">Tunisia</option>
                                                                                                                <option value="Turkey" title="Turkey">Turkey</option>
                                                                                                                <option value="Turkmenistan" title="Turkmenistan">Turkmenistan</option>
                                                                                                                <option value="Tuvalu" title="Tuvalu">Tuvalu</option>
                                                                                                                <option value="UAE" title="UAE">UAE</option>
                                                                                                                <option value="UK" title="UK">UK</option>
                                                                                                                <option value="Uganda" title="Uganda">Uganda</option>
                                                                                                                <option value="Ukraine" title="Ukraine">Ukraine</option>
                                                                                                                <option value="Uruguay" title="Uruguay">Uruguay</option>
                                                                                                                <option value="Uzbekistan" title="Uzbekistan">Uzbekistan</option>
                                                                                                                <option value="Vanuatu" title="Vanuatu">Vanuatu</option>
                                                                                                                <option value="Vatican City" title="Vatican City">Vatican City</option>
                                                                                                                <option value="Venezuela" title="Venezuela">Venezuela</option>
                                                                                                                <option value="Vietnam" title="Vietnam">Vietnam</option>
                                                                                                                <option value="Zambia" title="Zambia">Zambia</option>
                                                                                                                <option value="Zimbabwe" title="Zimbabwe">Zimbabwe</option>
                                                                                                            </select>
                                                </div>
                                            </div>
                                                                                        <div class="zForm-row rightFormat">
                                                <div class="zForm-col">
                                                    <!--? $a = 0;?-->
                                                    <label><input type="checkbox" name="meta[use_info_broker][Contact options    ]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Contact options    </span></label>
                                                </div>
                                                <div class="zForm-col">
                                                    <select class="box-shadow" name="meta[info_broker][Contact options    ]">
                                                        <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                <option value="Call back request" title="Call back request">Call back request</option>
                                                                                                                <option value="Email" title="Email">Email</option>
                                                                                                                <option value="Fax" title="Fax">Fax</option>
                                                                                                                <option value="Live Chat" title="Live Chat">Live Chat</option>
                                                                                                                <option value="Mail" title="Mail">Mail</option>
                                                                                                                <option value="SMS" title="SMS">SMS</option>
                                                                                                                <option value="Telephone" title="Telephone">Telephone</option>
                                                                                                            </select>
                                                </div>
                                            </div>
                                                                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="companyFilter-item">
                                <div class="brokerAccordeon-form">
                                    <div class="companyFilter-item-head greenBg">
                                        <div class="column checkAll"><label><input type="checkbox" name="b1" checked="checked" class="white-chekbox"></label></div>
                                        <div class="column"><i class="icon-sprite icon-accord-dollar-w"></i></div>
                                        <div class="column">Account Advantage</div>
                                    </div>
                                    <div class="companyFilter-item-body">
                                        <div class="inputsGroup">
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_advantage][MAM PAMM LAMM ACCOUNTS]" checked="checked" class="gray-chekbox"> <span class="zForm-text">MAM PAMM LAMM ACCOUNTS</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[advantage][MAM PAMM LAMM ACCOUNTS]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="LAMM">LAMM</option>
                                                                                                                            <option value="MAM">MAM</option>
                                                                                                                            <option value="No">No</option>
                                                                                                                            <option value="PAMM">PAMM</option>
                                                                                                                            <option value="PMAM">PMAM</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_advantage][Managed accounts  ]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Managed accounts  </span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[advantage][Managed accounts  ]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="No">No</option>
                                                                                                                            <option value="Yes (regulated with profit share)">Yes (regulated with profit share)</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_advantage][Liquidity Providers]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Liquidity Providers</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[advantage][Liquidity Providers]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value=""></option>
                                                                                                                            <option value="ADS Securities">ADS Securities</option>
                                                                                                                            <option value="Bank of America Merrill Lynch">Bank of America Merrill Lynch</option>
                                                                                                                            <option value="Barclays">Barclays</option>
                                                                                                                            <option value="Citigroup">Citigroup</option>
                                                                                                                            <option value="Deutsche Bank">Deutsche Bank</option>
                                                                                                                            <option value="FXCMPro">FXCMPro</option>
                                                                                                                            <option value="Goldman Sachs">Goldman Sachs</option>
                                                                                                                            <option value="Hidden">Hidden</option>
                                                                                                                            <option value="JP Morgan">JP Morgan</option>
                                                                                                                            <option value="Morgan Stanley">Morgan Stanley</option>
                                                                                                                            <option value="N/A">N/A</option>
                                                                                                                            <option value="Nomura">Nomura</option>
                                                                                                                            <option value="RBS">RBS</option>
                                                                                                                            <option value="Saxo Bank">Saxo Bank</option>
                                                                                                                            <option value="Sucden Financial">Sucden Financial</option>
                                                                                                                            <option value="UBS">UBS</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_advantage][Segregated Accounts ]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Segregated Accounts </span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[advantage][Segregated Accounts ]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="No">No</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_advantage][API integration]" checked="checked" class="gray-chekbox"> <span class="zForm-text">API integration</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[advantage][API integration]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="N/A">N/A</option>
                                                                                                                            <option value="No">No</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_advantage][Swap Free      ]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Swap Free      </span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[advantage][Swap Free      ]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="No">No</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                            <option value="Yes to Islamic clients only">Yes to Islamic clients only</option>
                                                                                                                            <option value="Yes to all">Yes to all</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_advantage][Interest on Margin  ]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Interest on Margin  </span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[advantage][Interest on Margin  ]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="No">No</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_advantage][Bonus]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Bonus</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[advantage][Bonus]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="Credit Bonus">Credit Bonus</option>
                                                                                                                            <option value="No Bonus">No Bonus</option>
                                                                                                                            <option value="No bonus">No bonus</option>
                                                                                                                            <option value="Tradable Bonus">Tradable Bonus</option>
                                                                                                                            <option value="Welcome Bonus">Welcome Bonus</option>
                                                                                                                            <option value="Withdrawable Bonus">Withdrawable Bonus</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_advantage][Contests]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Contests</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[advantage][Contests]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value=""></option>
                                                                                                                            <option value="Affiliate">Affiliate</option>
                                                                                                                            <option value="Brand promotion">Brand promotion</option>
                                                                                                                            <option value="Demo Account">Demo Account</option>
                                                                                                                            <option value="Demo account">Demo account</option>
                                                                                                                            <option value="IB">IB</option>
                                                                                                                            <option value="Live account">Live account</option>
                                                                                                                            <option value="None">None</option>
                                                                                                                            <option value="Other (please specify)">Other (please specify)</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_advantage][Cash Back]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Cash Back</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[advantage][Cash Back]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="No">No</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_advantage][One to One Training]" checked="checked" class="gray-chekbox"> <span class="zForm-text">One to One Training</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[advantage][One to One Training]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="No">No</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_advantage][Trading Signals]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Trading Signals</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[advantage][Trading Signals]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="No">No</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                            <option value="Yes - All clients">Yes - All clients</option>
                                                                                                                            <option value="Yes - Funded trader accounts only">Yes - Funded trader accounts only</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_advantage][Free VPS Services]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Free VPS Services</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[advantage][Free VPS Services]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="No">No</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                            <option value="Yes - Funded trader accounts only">Yes - Funded trader accounts only</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_advantage][Native Support]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Native Support</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[advantage][Native Support]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="No">No</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_advantage][Mobile Trading]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Mobile Trading</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[advantage][Mobile Trading]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_advantage][24 hour trading]" checked="checked" class="gray-chekbox"> <span class="zForm-text">24 hour trading</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[advantage][24 hour trading]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="No">No</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_advantage][News trading]" checked="checked" class="gray-chekbox"> <span class="zForm-text">News trading</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[advantage][News trading]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="Depends">Depends</option>
                                                                                                                            <option value="Depends on account type">Depends on account type</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_advantage][Personal Account Manager]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Personal Account Manager</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[advantage][Personal Account Manager]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="No">No</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_advantage][Live Chat]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Live Chat</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[advantage][Live Chat]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_advantage][SMS notification]" checked="checked" class="gray-chekbox"> <span class="zForm-text">SMS notification</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[advantage][SMS notification]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="No">No</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_advantage][Other Features]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Other Features</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[advantage][Other Features]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value=""></option>
                                                                                                                            <option value="ADS Algo Builder">ADS Algo Builder</option>
                                                                                                                            <option value="EA Builder">EA Builder</option>
                                                                                                                            <option value="Guaranteed Stop">Guaranteed Stop</option>
                                                                                                                            <option value="ICM Capital Prepaid MasterCard to withdraw funds from ATM and shop wherever MasterCard is accepted ">ICM Capital Prepaid MasterCard to withdraw funds from ATM and shop wherever MasterCard is accepted </option>
                                                                                                                            <option value="N/A">N/A</option>
                                                                                                                            <option value="No">No</option>
                                                                                                                            <option value="Social Trading">Social Trading</option>
                                                                                                                            <option value="TradeLab">TradeLab</option>
                                                                                                                            <option value="Trading Central Free Access">Trading Central Free Access</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_advantage][Managed accounts ]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Managed accounts </span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[advantage][Managed accounts ]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_advantage][Swap Free]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Swap Free</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[advantage][Swap Free]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="Yes to Islamic clients only">Yes to Islamic clients only</option>
                                                                                                                            <option value="Yes to all">Yes to all</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_advantage][Interest on Margin ]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Interest on Margin </span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[advantage][Interest on Margin ]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="No">No</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_advantage][Interest on Margin]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Interest on Margin</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[advantage][Interest on Margin]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="No">No</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_advantage][Interest on Margin    ]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Interest on Margin    </span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[advantage][Interest on Margin    ]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="No">No</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_advantage][Swap Free  ]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Swap Free  </span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[advantage][Swap Free  ]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_advantage][Swap Free   ]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Swap Free   </span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[advantage][Swap Free   ]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="Yes to Islamic clients only ">Yes to Islamic clients only </option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_advantage][One to One Training    ]" checked="checked" class="gray-chekbox"> <span class="zForm-text">One to One Training    </span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[advantage][One to One Training    ]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                    </div>
                                        <div class="zForm-row">
                                            <div class="checkAll">
                                                <label><input type="checkbox" name="b1"> <span class="zForm-text">Check/Uncheck all</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="column">
                            <div class="companyFilter-item">
                                <div class="brokerAccordeon-form">
                                    <div class="companyFilter-item-head">
                                        <div class="column checkAll"><label><input type="checkbox" name="b1" checked="checked" class="white-chekbox"></label></div>
                                        <div class="column"><i class="icon-sprite icon-accord-graph-w"></i></div>
                                        <div class="column">Trading Information</div>
                                    </div>
                                    <div class="companyFilter-item-body">
                                        <div class="inputsGroup">
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_info_trading][Platform]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Platform</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_trading][Platform]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="AFX Fast">AFX Fast</option>
                                                                                                                            <option value="CurreneX">CurreneX</option>
                                                                                                                            <option value="MT4">MT4</option>
                                                                                                                            <option value="MT4 Mac">MT4 Mac</option>
                                                                                                                            <option value="MT4 WebTrader">MT4 WebTrader</option>
                                                                                                                            <option value="MT5">MT5</option>
                                                                                                                            <option value="MultiTerminal">MultiTerminal</option>
                                                                                                                            <option value="OREX">OREX</option>
                                                                                                                            <option value="ParagonEX">ParagonEX</option>
                                                                                                                            <option value="Plus500">Plus500</option>
                                                                                                                            <option value="Sirix">Sirix</option>
                                                                                                                            <option value="WebTerminal">WebTerminal</option>
                                                                                                                            <option value="Webtrader">Webtrader</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_info_trading][Platform timezone]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Platform timezone</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_trading][Platform timezone]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="GMT">GMT</option>
                                                                                                                            <option value="GMT +2">GMT +2</option>
                                                                                                                            <option value="GMT+0">GMT+0</option>
                                                                                                                            <option value="GMT+2">GMT+2</option>
                                                                                                                            <option value="GMT+3">GMT+3</option>
                                                                                                                            <option value="User time-zone">User time-zone</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_info_trading][Commission]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Commission</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_trading][Commission]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="No">No</option>
                                                                                                                            <option value="Only for ECN PLUS account">Only for ECN PLUS account</option>
                                                                                                                            <option value="Only on ECN Account">Only on ECN Account</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_info_trading][Spread]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Spread</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_trading][Spread]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="Fixed">Fixed</option>
                                                                                                                            <option value="Variable">Variable</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_info_trading][Average Spread on EURUSD]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Average Spread on EURUSD</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_trading][Average Spread on EURUSD]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="0.0 < 1.0">0.0 &lt; 1.0</option>
                                                                                                                            <option value="1.0 < 2.0">1.0 &lt; 2.0</option>
                                                                                                                            <option value="1.1 < 2.0">1.1 &lt; 2.0</option>
                                                                                                                            <option value="2.1<3.0">2.1&lt;3.0</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_info_trading][Average Spread on GBPUSD]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Average Spread on GBPUSD</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_trading][Average Spread on GBPUSD]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="0.0 < 1.0">0.0 &lt; 1.0</option>
                                                                                                                            <option value="1.0 < 2.0">1.0 &lt; 2.0</option>
                                                                                                                            <option value="1.1 < 2.0">1.1 &lt; 2.0</option>
                                                                                                                            <option value="1.1 <2.0">1.1 &lt;2.0</option>
                                                                                                                            <option value="2.1 < 3.0">2.1 &lt; 3.0</option>
                                                                                                                            <option value="2.1<3.0">2.1&lt;3.0</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_info_trading][Average Spread on Gold ]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Average Spread on Gold </span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_trading][Average Spread on Gold ]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value=" $0.26 <  $0.50"> $0.26 &lt;  $0.50</option>
                                                                                                                            <option value="$0.00 < $0.25">$0.00 &lt; $0.25</option>
                                                                                                                            <option value="$0.05 < $0.45">$0.05 &lt; $0.45</option>
                                                                                                                            <option value="$0.26 <  $0.50">$0.26 &lt;  $0.50</option>
                                                                                                                            <option value="$0.26 < $0.50">$0.26 &lt; $0.50</option>
                                                                                                                            <option value="$0.40">$0.40</option>
                                                                                                                            <option value="$0.51 < $0.75">$0.51 &lt; $0.75</option>
                                                                                                                            <option value="$0.76 < ">$0.76 &lt; </option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_info_trading][Scalping]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Scalping</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_trading][Scalping]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="No">No</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_info_trading][Hedging]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Hedging</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_trading][Hedging]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="No">No</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_info_trading][Trailing Stop]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Trailing Stop</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_trading][Trailing Stop]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="No">No</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_info_trading][OCO Orders  ]" checked="checked" class="gray-chekbox"> <span class="zForm-text">OCO Orders  </span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_trading][OCO Orders  ]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="N/A">N/A</option>
                                                                                                                            <option value="No">No</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_info_trading][One Click Trading   ]" checked="checked" class="gray-chekbox"> <span class="zForm-text">One Click Trading   </span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_trading][One Click Trading   ]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="No">No</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_info_trading][Fractional pip pricing]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Fractional pip pricing</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_trading][Fractional pip pricing]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="N/A">N/A</option>
                                                                                                                            <option value="No">No</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_info_trading][Demo Account]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Demo Account</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_trading][Demo Account]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_info_trading][Demo Account expiration]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Demo Account expiration</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_trading][Demo Account expiration]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="Never">Never</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_info_trading][EA compatible  ]" checked="checked" class="gray-chekbox"> <span class="zForm-text">EA compatible  </span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_trading][EA compatible  ]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="No">No</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_info_trading][All EA(s) allowed   ]" checked="checked" class="gray-chekbox"> <span class="zForm-text">All EA(s) allowed   </span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_trading][All EA(s) allowed   ]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="No">No</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_info_trading][One Click Trading]" checked="checked" class="gray-chekbox"> <span class="zForm-text">One Click Trading</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_trading][One Click Trading]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_info_trading][All EA(s) allowed  ]" checked="checked" class="gray-chekbox"> <span class="zForm-text">All EA(s) allowed  </span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_trading][All EA(s) allowed  ]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">
                                                        <label><input type="checkbox" name="meta[use_info_trading][EA compatible     ]" checked="checked" class="gray-chekbox"> <span class="zForm-text">EA compatible     </span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_trading][EA compatible     ]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="No">No</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="companyFilter-item">
                                <div class="brokerAccordeon-form">
                                    <div class="companyFilter-item-head">
                                        <div class="column checkAll"><label><input type="checkbox" name="b1" checked="checked" class="white-chekbox"></label></div>
                                        <div class="column"><i class="icon-sprite icon-accord-bank-w"></i></div>
                                        <div class="column">Account Information</div>
                                    </div>
                                    <div class="companyFilter-item-body">
                                        <div class="inputsGroup">
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">

                                                        <label><input type="checkbox" name="meta[use_info_account][Cent account]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Cent account</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_account][Cent account]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value=""></option>
                                                                                                                            <option value="000">000</option>
                                                                                                                            <option value="N/A">N/A</option>
                                                                                                                            <option value="No requirements">No requirements</option>
                                                                                                                            <option value="Up to $1">Up to $1</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">

                                                        <label><input type="checkbox" name="meta[use_info_account][Mini account]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Mini account</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_account][Mini account]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="$100 <">$100 &lt;</option>
                                                                                                                            <option value="$100 < ">$100 &lt; </option>
                                                                                                                            <option value="$2">$2</option>
                                                                                                                            <option value="$20 CySEC">$20 CySEC</option>
                                                                                                                            <option value="$200 FCA">$200 FCA</option>
                                                                                                                            <option value="$300 < ">$300 &lt; </option>
                                                                                                                            <option value="$50 <">$50 &lt;</option>
                                                                                                                            <option value="500">500</option>
                                                                                                                            <option value="500 <">500 &lt;</option>
                                                                                                                            <option value="< $2">&lt; $2</option>
                                                                                                                            <option value="Below $2">Below $2</option>
                                                                                                                            <option value="No requirements">No requirements</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">

                                                        <label><input type="checkbox" name="meta[use_info_account][Standard Account]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Standard Account</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_account][Standard Account]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="$100 < ">$100 &lt; </option>
                                                                                                                            <option value="$2">$2</option>
                                                                                                                            <option value="$2000">$2000</option>
                                                                                                                            <option value="$300 < ">$300 &lt; </option>
                                                                                                                            <option value="$50 <">$50 &lt;</option>
                                                                                                                            <option value="$500">$500</option>
                                                                                                                            <option value="$750 <">$750 &lt;</option>
                                                                                                                            <option value="500">500</option>
                                                                                                                            <option value="2500">2500</option>
                                                                                                                            <option value="500 <">500 &lt;</option>
                                                                                                                            <option value="< $">&lt; $</option>
                                                                                                                            <option value="< $2">&lt; $2</option>
                                                                                                                            <option value="> $2">&gt; $2</option>
                                                                                                                            <option value="Above $2">Above $2</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">

                                                        <label><input type="checkbox" name="meta[use_info_account][Pro Account]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Pro Account</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_account][Pro Account]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value=""></option>
                                                                                                                            <option value="$1">$1</option>
                                                                                                                            <option value="$20">$20</option>
                                                                                                                            <option value="$5">$5</option>
                                                                                                                            <option value="000">000</option>
                                                                                                                            <option value="000 - $100">000 - $100</option>
                                                                                                                            <option value="000 <">000 &lt;</option>
                                                                                                                            <option value="> $20">&gt; $20</option>
                                                                                                                            <option value="N/A">N/A</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">

                                                        <label><input type="checkbox" name="meta[use_info_account][ECN Account ]" checked="checked" class="gray-chekbox"> <span class="zForm-text">ECN Account </span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_account][ECN Account ]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="$1">$1</option>
                                                                                                                            <option value="$10">$10</option>
                                                                                                                            <option value="$300 <">$300 &lt;</option>
                                                                                                                            <option value="$5">$5</option>
                                                                                                                            <option value="000">000</option>
                                                                                                                            <option value="000 <">000 &lt;</option>
                                                                                                                            <option value="000; $15">000; $15</option>
                                                                                                                            <option value="< $5">&lt; $5</option>
                                                                                                                            <option value="N/A">N/A</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">

                                                        <label><input type="checkbox" name="meta[use_info_account][Maximum leverage on Forex]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Maximum leverage on Forex</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_account][Maximum leverage on Forex]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="1:200">1:200</option>
                                                                                                                            <option value="1:2000">1:2000</option>
                                                                                                                            <option value="1:300">1:300</option>
                                                                                                                            <option value="1:400">1:400</option>
                                                                                                                            <option value="1:500">1:500</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">

                                                        <label><input type="checkbox" name="meta[use_info_account][Maximum leverage on commodities]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Maximum leverage on commodities</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_account][Maximum leverage on commodities]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="01:50">01:50</option>
                                                                                                                            <option value="1:100">1:100</option>
                                                                                                                            <option value="1:152">1:152</option>
                                                                                                                            <option value="1:200">1:200</option>
                                                                                                                            <option value="1:75">1:75</option>
                                                                                                                            <option value="Fixed Margin 1000 USD">Fixed Margin 1000 USD</option>
                                                                                                                            <option value="Unlimited ">Unlimited </option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">

                                                        <label><input type="checkbox" name="meta[use_info_account][Maximum leverage on CFDs]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Maximum leverage on CFDs</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_account][Maximum leverage on CFDs]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="01:50">01:50</option>
                                                                                                                            <option value="1:100">1:100</option>
                                                                                                                            <option value="1:20">1:20</option>
                                                                                                                            <option value="1:200">1:200</option>
                                                                                                                            <option value="1:250">1:250</option>
                                                                                                                            <option value="1:294">1:294</option>
                                                                                                                            <option value="1:50">1:50</option>
                                                                                                                            <option value="1:75">1:75</option>
                                                                                                                            <option value="Fixed Margin 1000 USD">Fixed Margin 1000 USD</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">

                                                        <label><input type="checkbox" name="meta[use_info_account][Maximum leverage on Indices]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Maximum leverage on Indices</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_account][Maximum leverage on Indices]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="01:50">01:50</option>
                                                                                                                            <option value="1:100">1:100</option>
                                                                                                                            <option value="1:200">1:200</option>
                                                                                                                            <option value="1:250">1:250</option>
                                                                                                                            <option value="1:294">1:294</option>
                                                                                                                            <option value="1:50">1:50</option>
                                                                                                                            <option value="1:75">1:75</option>
                                                                                                                            <option value="Fixed Margin 1000 USD">Fixed Margin 1000 USD</option>
                                                                                                                            <option value="N/A">N/A</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">

                                                        <label><input type="checkbox" name="meta[use_info_account][Stop Out]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Stop Out</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_account][Stop Out]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value=""></option>
                                                                                                                            <option value="0 % On Universal Accounts">0 % On Universal Accounts</option>
                                                                                                                            <option value="0%">0%</option>
                                                                                                                            <option value="10%">10%</option>
                                                                                                                            <option value="20 % On ECN">20 % On ECN</option>
                                                                                                                            <option value="20%">20%</option>
                                                                                                                            <option value="30%">30%</option>
                                                                                                                            <option value="4%">4%</option>
                                                                                                                            <option value="50%">50%</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">

                                                        <label><input type="checkbox" name="meta[use_info_account][Execution type]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Execution type</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_account][Execution type]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="Instant">Instant</option>
                                                                                                                            <option value="Instant and Market available ">Instant and Market available </option>
                                                                                                                            <option value="Market">Market</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">

                                                        <label><input type="checkbox" name="meta[use_info_account][Minimum lot size]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Minimum lot size</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_account][Minimum lot size]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="0">0</option>
                                                                                                                            <option value="0.001">0.001</option>
                                                                                                                            <option value="0.005">0.005</option>
                                                                                                                            <option value="0.01">0.01</option>
                                                                                                                            <option value="0.02">0.02</option>
                                                                                                                            <option value="01">01</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">

                                                        <label><input type="checkbox" name="meta[use_info_account][Maximum lot size]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Maximum lot size</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_account][Maximum lot size]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="20">20</option>
                                                                                                                            <option value="200">200</option>
                                                                                                                            <option value="2000 for CFDs">2000 for CFDs</option>
                                                                                                                            <option value="50">50</option>
                                                                                                                            <option value="100">100</option>
                                                                                                                            <option value="1000">1000</option>
                                                                                                                            <option value="50 for FX and Metals">50 for FX and Metals</option>
                                                                                                                            <option value="500">500</option>
                                                                                                                            <option value="Instrument Depended ">Instrument Depended </option>
                                                                                                                            <option value="N/A">N/A</option>
                                                                                                                            <option value="No limitations">No limitations</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">

                                                        <label><input type="checkbox" name="meta[use_info_account][Price Decimal]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Price Decimal</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_account][Price Decimal]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="4 digit">4 digit</option>
                                                                                                                            <option value="5 digit">5 digit</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">

                                                        <label><input type="checkbox" name="meta[use_info_account][Account Currency]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Account Currency</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_account][Account Currency]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="AED">AED</option>
                                                                                                                            <option value="AMD">AMD</option>
                                                                                                                            <option value="ARS">ARS</option>
                                                                                                                            <option value="AUD">AUD</option>
                                                                                                                            <option value="AZN">AZN</option>
                                                                                                                            <option value="BDT">BDT</option>
                                                                                                                            <option value="BGN">BGN</option>
                                                                                                                            <option value="BHD">BHD</option>
                                                                                                                            <option value="BND">BND</option>
                                                                                                                            <option value="BRL">BRL</option>
                                                                                                                            <option value="BYR">BYR</option>
                                                                                                                            <option value="CAD">CAD</option>
                                                                                                                            <option value="CHF">CHF</option>
                                                                                                                            <option value="CLP">CLP</option>
                                                                                                                            <option value="CNY">CNY</option>
                                                                                                                            <option value="COP">COP</option>
                                                                                                                            <option value="CZK">CZK</option>
                                                                                                                            <option value="DKK">DKK</option>
                                                                                                                            <option value="DZD">DZD</option>
                                                                                                                            <option value="EGP">EGP</option>
                                                                                                                            <option value="EUR">EUR</option>
                                                                                                                            <option value="GBP">GBP</option>
                                                                                                                            <option value="GEL">GEL</option>
                                                                                                                            <option value="GHS">GHS</option>
                                                                                                                            <option value="HKD">HKD</option>
                                                                                                                            <option value="HRK">HRK</option>
                                                                                                                            <option value="HUF">HUF</option>
                                                                                                                            <option value="IDR">IDR</option>
                                                                                                                            <option value="ILS">ILS</option>
                                                                                                                            <option value="INR">INR</option>
                                                                                                                            <option value="ISK">ISK</option>
                                                                                                                            <option value="JOD">JOD</option>
                                                                                                                            <option value="JPY">JPY</option>
                                                                                                                            <option value="KES">KES</option>
                                                                                                                            <option value="KGS">KGS</option>
                                                                                                                            <option value="KRW">KRW</option>
                                                                                                                            <option value="KWD">KWD</option>
                                                                                                                            <option value="KZT">KZT</option>
                                                                                                                            <option value="LBP">LBP</option>
                                                                                                                            <option value="LKR">LKR</option>
                                                                                                                            <option value="LTL">LTL</option>
                                                                                                                            <option value="LVL">LVL</option>
                                                                                                                            <option value="MAD">MAD</option>
                                                                                                                            <option value="MAGUSD">MAGUSD</option>
                                                                                                                            <option value="MAUUSD">MAUUSD</option>
                                                                                                                            <option value="MBAUSD">MBAUSD</option>
                                                                                                                            <option value="MBBUSD">MBBUSD</option>
                                                                                                                            <option value="MBCUSD">MBCUSD</option>
                                                                                                                            <option value="MBDUSD">MBDUSD</option>
                                                                                                                            <option value="MPDUSD">MPDUSD</option>
                                                                                                                            <option value="MPTUSD">MPTUSD</option>
                                                                                                                            <option value="MXN">MXN</option>
                                                                                                                            <option value="MYR">MYR</option>
                                                                                                                            <option value="NGN">NGN</option>
                                                                                                                            <option value="NOK">NOK</option>
                                                                                                                            <option value="NPR">NPR</option>
                                                                                                                            <option value="NZD">NZD</option>
                                                                                                                            <option value="OMR">OMR</option>
                                                                                                                            <option value="PHP">PHP</option>
                                                                                                                            <option value="PKR">PKR</option>
                                                                                                                            <option value="PLN">PLN</option>
                                                                                                                            <option value="QAR">QAR</option>
                                                                                                                            <option value="RON">RON</option>
                                                                                                                            <option value="RUR">RUR</option>
                                                                                                                            <option value="SAR">SAR</option>
                                                                                                                            <option value="SEK">SEK</option>
                                                                                                                            <option value="SGD">SGD</option>
                                                                                                                            <option value="SYP">SYP</option>
                                                                                                                            <option value="THB">THB</option>
                                                                                                                            <option value="TJS">TJS</option>
                                                                                                                            <option value="TMT">TMT</option>
                                                                                                                            <option value="TND">TND</option>
                                                                                                                            <option value="TRY">TRY</option>
                                                                                                                            <option value="TWD">TWD</option>
                                                                                                                            <option value="UAH">UAH</option>
                                                                                                                            <option value="UGX">UGX</option>
                                                                                                                            <option value="USD">USD</option>
                                                                                                                            <option value="UZS">UZS</option>
                                                                                                                            <option value="VND">VND</option>
                                                                                                                            <option value="VUV">VUV</option>
                                                                                                                            <option value="XAG">XAG</option>
                                                                                                                            <option value="XAU">XAU</option>
                                                                                                                            <option value="ZAR">ZAR</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">

                                                        <label><input type="checkbox" name="meta[use_info_account][Available currency pairs]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Available currency pairs</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_account][Available currency pairs]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="AUD/CAD">AUD/CAD</option>
                                                                                                                            <option value="AUD/CHF">AUD/CHF</option>
                                                                                                                            <option value="AUD/JPY">AUD/JPY</option>
                                                                                                                            <option value="AUD/NZD">AUD/NZD</option>
                                                                                                                            <option value="AUD/SGD">AUD/SGD</option>
                                                                                                                            <option value="AUD/USD">AUD/USD</option>
                                                                                                                            <option value="AUDCAD">AUDCAD</option>
                                                                                                                            <option value="AUDCHF">AUDCHF</option>
                                                                                                                            <option value="AUDDKK">AUDDKK</option>
                                                                                                                            <option value="AUDGBP">AUDGBP</option>
                                                                                                                            <option value="AUDHUF">AUDHUF</option>
                                                                                                                            <option value="AUDJPY">AUDJPY</option>
                                                                                                                            <option value="AUDMXN">AUDMXN</option>
                                                                                                                            <option value="AUDNOK">AUDNOK</option>
                                                                                                                            <option value="AUDNZD">AUDNZD</option>
                                                                                                                            <option value="AUDPLN">AUDPLN</option>
                                                                                                                            <option value="AUDSEK">AUDSEK</option>
                                                                                                                            <option value="AUDSGD">AUDSGD</option>
                                                                                                                            <option value="AUDTRY">AUDTRY</option>
                                                                                                                            <option value="AUDUSD">AUDUSD</option>
                                                                                                                            <option value="AUDZAR">AUDZAR</option>
                                                                                                                            <option value="BTC/USD">BTC/USD</option>
                                                                                                                            <option value="CAD/CHF">CAD/CHF</option>
                                                                                                                            <option value="CAD/JPY">CAD/JPY</option>
                                                                                                                            <option value="CAD/SGD">CAD/SGD</option>
                                                                                                                            <option value="CADCHF">CADCHF</option>
                                                                                                                            <option value="CADJPY">CADJPY</option>
                                                                                                                            <option value="CADMXN">CADMXN</option>
                                                                                                                            <option value="CADNOK">CADNOK</option>
                                                                                                                            <option value="CADPLN">CADPLN</option>
                                                                                                                            <option value="CADTRY">CADTRY</option>
                                                                                                                            <option value="CHF/DKK">CHF/DKK</option>
                                                                                                                            <option value="CHF/JPY">CHF/JPY</option>
                                                                                                                            <option value="CHF/NOK">CHF/NOK</option>
                                                                                                                            <option value="CHF/SEK">CHF/SEK</option>
                                                                                                                            <option value="CHF/SGD">CHF/SGD</option>
                                                                                                                            <option value="CHFHUF">CHFHUF</option>
                                                                                                                            <option value="CHFJPY">CHFJPY</option>
                                                                                                                            <option value="CHFMXN">CHFMXN</option>
                                                                                                                            <option value="CHFNOK">CHFNOK</option>
                                                                                                                            <option value="CHFPLN">CHFPLN</option>
                                                                                                                            <option value="CHFSEK">CHFSEK</option>
                                                                                                                            <option value="CHFSGD">CHFSGD</option>
                                                                                                                            <option value="CHFTRY">CHFTRY</option>
                                                                                                                            <option value="CHFZAR">CHFZAR</option>
                                                                                                                            <option value="DKK/NOK">DKK/NOK</option>
                                                                                                                            <option value="DKKHUF">DKKHUF</option>
                                                                                                                            <option value="DKKJPY">DKKJPY</option>
                                                                                                                            <option value="DKKPLN">DKKPLN</option>
                                                                                                                            <option value="DKKSGD">DKKSGD</option>
                                                                                                                            <option value="DKKZAR">DKKZAR</option>
                                                                                                                            <option value="EUR/AUD">EUR/AUD</option>
                                                                                                                            <option value="EUR/CAD">EUR/CAD</option>
                                                                                                                            <option value="EUR/CHF">EUR/CHF</option>
                                                                                                                            <option value="EUR/CZK">EUR/CZK</option>
                                                                                                                            <option value="EUR/DKK">EUR/DKK</option>
                                                                                                                            <option value="EUR/GBP">EUR/GBP</option>
                                                                                                                            <option value="EUR/HKD">EUR/HKD</option>
                                                                                                                            <option value="EUR/HUF">EUR/HUF</option>
                                                                                                                            <option value="EUR/JPY">EUR/JPY</option>
                                                                                                                            <option value="EUR/MXN">EUR/MXN</option>
                                                                                                                            <option value="EUR/NOK">EUR/NOK</option>
                                                                                                                            <option value="EUR/NZD">EUR/NZD</option>
                                                                                                                            <option value="EUR/PLN">EUR/PLN</option>
                                                                                                                            <option value="EUR/SEK">EUR/SEK</option>
                                                                                                                            <option value="EUR/SGD">EUR/SGD</option>
                                                                                                                            <option value="EUR/SGD">EUR/SGD</option>
                                                                                                                            <option value="EUR/TRY">EUR/TRY</option>
                                                                                                                            <option value="EUR/USD">EUR/USD</option>
                                                                                                                            <option value="EURAUD">EURAUD</option>
                                                                                                                            <option value="EURCAD">EURCAD</option>
                                                                                                                            <option value="EURCHF">EURCHF</option>
                                                                                                                            <option value="EURDKK">EURDKK</option>
                                                                                                                            <option value="EURGBP">EURGBP</option>
                                                                                                                            <option value="EURHKD">EURHKD</option>
                                                                                                                            <option value="EURHUF">EURHUF</option>
                                                                                                                            <option value="EURINR">EURINR</option>
                                                                                                                            <option value="EURJPY">EURJPY</option>
                                                                                                                            <option value="EURMXN">EURMXN</option>
                                                                                                                            <option value="EURNOK">EURNOK</option>
                                                                                                                            <option value="EURNZD">EURNZD</option>
                                                                                                                            <option value="EURPLN">EURPLN</option>
                                                                                                                            <option value="EURRON">EURRON</option>
                                                                                                                            <option value="EURSEK">EURSEK</option>
                                                                                                                            <option value="EURSGD">EURSGD</option>
                                                                                                                            <option value="EURTRY">EURTRY</option>
                                                                                                                            <option value="EURUSD">EURUSD</option>
                                                                                                                            <option value="EURZAR">EURZAR</option>
                                                                                                                            <option value="GBP/AUD">GBP/AUD</option>
                                                                                                                            <option value="GBP/CAD">GBP/CAD</option>
                                                                                                                            <option value="GBP/CHF">GBP/CHF</option>
                                                                                                                            <option value="GBP/DKK">GBP/DKK</option>
                                                                                                                            <option value="GBP/JPY">GBP/JPY</option>
                                                                                                                            <option value="GBP/NOK">GBP/NOK</option>
                                                                                                                            <option value="GBP/NZD">GBP/NZD</option>
                                                                                                                            <option value="GBP/SEK">GBP/SEK</option>
                                                                                                                            <option value="GBP/SGD">GBP/SGD</option>
                                                                                                                            <option value="GBP/TRY">GBP/TRY</option>
                                                                                                                            <option value="GBP/USD">GBP/USD</option>
                                                                                                                            <option value="GBPAUD">GBPAUD</option>
                                                                                                                            <option value="GBPCAD">GBPCAD</option>
                                                                                                                            <option value="GBPCHF">GBPCHF</option>
                                                                                                                            <option value="GBPDKK">GBPDKK</option>
                                                                                                                            <option value="GBPHUF">GBPHUF</option>
                                                                                                                            <option value="GBPILS">GBPILS</option>
                                                                                                                            <option value="GBPINR">GBPINR</option>
                                                                                                                            <option value="GBPJPY">GBPJPY</option>
                                                                                                                            <option value="GBPMXN">GBPMXN</option>
                                                                                                                            <option value="GBPNOK">GBPNOK</option>
                                                                                                                            <option value="GBPNZD">GBPNZD</option>
                                                                                                                            <option value="GBPPLN">GBPPLN</option>
                                                                                                                            <option value="GBPSEK">GBPSEK</option>
                                                                                                                            <option value="GBPSGD">GBPSGD</option>
                                                                                                                            <option value="GBPTRY">GBPTRY</option>
                                                                                                                            <option value="GBPUSD">GBPUSD</option>
                                                                                                                            <option value="GBPZAR">GBPZAR</option>
                                                                                                                            <option value="HKD/JPY">HKD/JPY</option>
                                                                                                                            <option value="HKDJPY">HKDJPY</option>
                                                                                                                            <option value="HUFJPY">HUFJPY</option>
                                                                                                                            <option value="LTC/USD">LTC/USD</option>
                                                                                                                            <option value="MXN/JPY">MXN/JPY</option>
                                                                                                                            <option value="MXNJPY">MXNJPY</option>
                                                                                                                            <option value="NOK/JPY">NOK/JPY</option>
                                                                                                                            <option value="NOK/SEK">NOK/SEK</option>
                                                                                                                            <option value="NOKDKK">NOKDKK</option>
                                                                                                                            <option value="NOKJPY">NOKJPY</option>
                                                                                                                            <option value="NOKSEK">NOKSEK</option>
                                                                                                                            <option value="NZD/CAD">NZD/CAD</option>
                                                                                                                            <option value="NZD/CHF">NZD/CHF</option>
                                                                                                                            <option value="NZD/JPY">NZD/JPY</option>
                                                                                                                            <option value="NZD/SGD">NZD/SGD</option>
                                                                                                                            <option value="NZD/USD">NZD/USD</option>
                                                                                                                            <option value="NZDCAD">NZDCAD</option>
                                                                                                                            <option value="NZDCHF">NZDCHF</option>
                                                                                                                            <option value="NZDDKK">NZDDKK</option>
                                                                                                                            <option value="NZDHUF">NZDHUF</option>
                                                                                                                            <option value="NZDJPY">NZDJPY</option>
                                                                                                                            <option value="NZDMXN">NZDMXN</option>
                                                                                                                            <option value="NZDNOK">NZDNOK</option>
                                                                                                                            <option value="NZDPLN">NZDPLN</option>
                                                                                                                            <option value="NZDSEK">NZDSEK</option>
                                                                                                                            <option value="NZDSGD">NZDSGD</option>
                                                                                                                            <option value="NZDTRY">NZDTRY</option>
                                                                                                                            <option value="NZDUSD">NZDUSD</option>
                                                                                                                            <option value="NZDZAR">NZDZAR</option>
                                                                                                                            <option value="PLNDKK">PLNDKK</option>
                                                                                                                            <option value="PLNHUF">PLNHUF</option>
                                                                                                                            <option value="PLNJPY">PLNJPY</option>
                                                                                                                            <option value="PLNSEK">PLNSEK</option>
                                                                                                                            <option value="SEK/JPY">SEK/JPY</option>
                                                                                                                            <option value="SEK/NOK">SEK/NOK</option>
                                                                                                                            <option value="SEKDKK">SEKDKK</option>
                                                                                                                            <option value="SEKJPY">SEKJPY</option>
                                                                                                                            <option value="SEKNOK">SEKNOK</option>
                                                                                                                            <option value="SGD/JPY">SGD/JPY</option>
                                                                                                                            <option value="SGDHKD">SGDHKD</option>
                                                                                                                            <option value="SGDJPY">SGDJPY</option>
                                                                                                                            <option value="SPT_DXY">SPT_DXY</option>
                                                                                                                            <option value="TRY/JPY">TRY/JPY</option>
                                                                                                                            <option value="TRYDKK">TRYDKK</option>
                                                                                                                            <option value="TRYJPY">TRYJPY</option>
                                                                                                                            <option value="TRYZAR">TRYZAR</option>
                                                                                                                            <option value="USD/CAD">USD/CAD</option>
                                                                                                                            <option value="USD/CHF">USD/CHF</option>
                                                                                                                            <option value="USD/CNH">USD/CNH</option>
                                                                                                                            <option value="USD/CZK">USD/CZK</option>
                                                                                                                            <option value="USD/DKK">USD/DKK</option>
                                                                                                                            <option value="USD/HKD">USD/HKD</option>
                                                                                                                            <option value="USD/HUF">USD/HUF</option>
                                                                                                                            <option value="USD/JPY">USD/JPY</option>
                                                                                                                            <option value="USD/MXN">USD/MXN</option>
                                                                                                                            <option value="USD/NOK">USD/NOK</option>
                                                                                                                            <option value="USD/PLN">USD/PLN</option>
                                                                                                                            <option value="USD/RUB">USD/RUB</option>
                                                                                                                            <option value="USD/SEK">USD/SEK</option>
                                                                                                                            <option value="USD/SGD">USD/SGD</option>
                                                                                                                            <option value="USD/TRY">USD/TRY</option>
                                                                                                                            <option value="USD/ZAR">USD/ZAR</option>
                                                                                                                            <option value="USDAED">USDAED</option>
                                                                                                                            <option value="USDCAD">USDCAD</option>
                                                                                                                            <option value="USDCHF">USDCHF</option>
                                                                                                                            <option value="USDCNH">USDCNH</option>
                                                                                                                            <option value="USDCNY">USDCNY</option>
                                                                                                                            <option value="USDCZK">USDCZK</option>
                                                                                                                            <option value="USDDDK">USDDDK</option>
                                                                                                                            <option value="USDDKK">USDDKK</option>
                                                                                                                            <option value="USDEGP">USDEGP</option>
                                                                                                                            <option value="USDHKD">USDHKD</option>
                                                                                                                            <option value="USDHRK">USDHRK</option>
                                                                                                                            <option value="USDHUF">USDHUF</option>
                                                                                                                            <option value="USDILS">USDILS</option>
                                                                                                                            <option value="USDINR">USDINR</option>
                                                                                                                            <option value="USDINR_1">USDINR_1</option>
                                                                                                                            <option value="USDJPY">USDJPY</option>
                                                                                                                            <option value="USDMXN">USDMXN</option>
                                                                                                                            <option value="USDNOK">USDNOK</option>
                                                                                                                            <option value="USDPLN">USDPLN</option>
                                                                                                                            <option value="USDRON">USDRON</option>
                                                                                                                            <option value="USDRUB">USDRUB</option>
                                                                                                                            <option value="USDRUB_1">USDRUB_1</option>
                                                                                                                            <option value="USDSAR">USDSAR</option>
                                                                                                                            <option value="USDSEK">USDSEK</option>
                                                                                                                            <option value="USDSGD">USDSGD</option>
                                                                                                                            <option value="USDTRY">USDTRY</option>
                                                                                                                            <option value="USDZAR">USDZAR</option>
                                                                                                                            <option value="XAAUD">XAAUD</option>
                                                                                                                            <option value="XAG/USD">XAG/USD</option>
                                                                                                                            <option value="XAGAUD">XAGAUD</option>
                                                                                                                            <option value="XAGEUR">XAGEUR</option>
                                                                                                                            <option value="XAGGBP">XAGGBP</option>
                                                                                                                            <option value="XAGUSD">XAGUSD</option>
                                                                                                                            <option value="XAU/USD">XAU/USD</option>
                                                                                                                            <option value="XAUEUR">XAUEUR</option>
                                                                                                                            <option value="XAUGBP">XAUGBP</option>
                                                                                                                            <option value="XAUUSD">XAUUSD</option>
                                                                                                                            <option value="ZAR/JPY">ZAR/JPY</option>
                                                                                                                            <option value="ZARJPY">ZARJPY</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">

                                                        <label><input type="checkbox" name="meta[use_info_account][Available Indices]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Available Indices</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_account][Available Indices]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value=""></option>
                                                                                                                            <option value="AEX (NL)">AEX (NL)</option>
                                                                                                                            <option value="AEX25">AEX25</option>
                                                                                                                            <option value="ATX (Austria 20)">ATX (Austria 20)</option>
                                                                                                                            <option value="AUS200">AUS200</option>
                                                                                                                            <option value="AUSTLN">AUSTLN</option>
                                                                                                                            <option value="BEL20">BEL20</option>
                                                                                                                            <option value="CAC 40">CAC 40</option>
                                                                                                                            <option value="CAC40">CAC40</option>
                                                                                                                            <option value="CAC40 (France)">CAC40 (France)</option>
                                                                                                                            <option value="CH20">CH20</option>
                                                                                                                            <option value="CHINA$">CHINA$</option>
                                                                                                                            <option value="China H-Shares">China H-Shares</option>
                                                                                                                            <option value="DAX">DAX</option>
                                                                                                                            <option value="DAX 30">DAX 30</option>
                                                                                                                            <option value="DE30">DE30</option>
                                                                                                                            <option value="DOW">DOW</option>
                                                                                                                            <option value="Dow Jones">Dow Jones</option>
                                                                                                                            <option value="ESP35">ESP35</option>
                                                                                                                            <option value="EU50">EU50</option>
                                                                                                                            <option value="EURO STOXX 50">EURO STOXX 50</option>
                                                                                                                            <option value="FRA40">FRA40</option>
                                                                                                                            <option value="FTSE">FTSE</option>
                                                                                                                            <option value="FTSE 100">FTSE 100</option>
                                                                                                                            <option value="FTSE MIB (Italy40)">FTSE MIB (Italy40)</option>
                                                                                                                            <option value="FTSE/MIB">FTSE/MIB</option>
                                                                                                                            <option value="FTSE100">FTSE100</option>
                                                                                                                            <option value="GER30">GER30</option>
                                                                                                                            <option value="Greece 20">Greece 20</option>
                                                                                                                            <option value="HK50">HK50</option>
                                                                                                                            <option value="HS50">HS50</option>
                                                                                                                            <option value="HSENG$">HSENG$</option>
                                                                                                                            <option value="Hang Seng Index">Hang Seng Index</option>
                                                                                                                            <option value="IBEX (Spain 35">IBEX (Spain 35</option>
                                                                                                                            <option value="IBEX-35">IBEX-35</option>
                                                                                                                            <option value="INDIA$">INDIA$</option>
                                                                                                                            <option value="JAPAN$">JAPAN$</option>
                                                                                                                            <option value="JPN225">JPN225</option>
                                                                                                                            <option value="MDAX (Germany MCap)">MDAX (Germany MCap)</option>
                                                                                                                            <option value="N/A">N/A</option>
                                                                                                                            <option value="NAS100">NAS100</option>
                                                                                                                            <option value="NASDAQ">NASDAQ</option>
                                                                                                                            <option value="NGAS">NGAS</option>
                                                                                                                            <option value="NIKKEI">NIKKEI</option>
                                                                                                                            <option value="Nasdaq">Nasdaq</option>
                                                                                                                            <option value="Nasdaq 100">Nasdaq 100</option>
                                                                                                                            <option value="Nikkei">Nikkei</option>
                                                                                                                            <option value="Nikkei 225">Nikkei 225</option>
                                                                                                                            <option value="Nikkei Japan">Nikkei Japan</option>
                                                                                                                            <option value="OBX (Norway 25)">OBX (Norway 25)</option>
                                                                                                                            <option value="OMXC20CAP">OMXC20CAP</option>
                                                                                                                            <option value="OMXS30 (Sweden)">OMXS30 (Sweden)</option>
                                                                                                                            <option value="OTC DAX Index Future">OTC DAX Index Future</option>
                                                                                                                            <option value="OTC Dow Jones Futures">OTC Dow Jones Futures</option>
                                                                                                                            <option value="OTC E-Mini S&amp;P 500 Index Future">OTC E-Mini S&amp;P 500 Index Future</option>
                                                                                                                            <option value="OTC E-mini NASDAQ">OTC E-mini NASDAQ</option>
                                                                                                                            <option value="OTC FTSE 100 Index Future">OTC FTSE 100 Index Future</option>
                                                                                                                            <option value="OTC Mini Dow Jones">OTC Mini Dow Jones</option>
                                                                                                                            <option value="S&amp;P 500">S&amp;P 500</option>
                                                                                                                            <option value="S&amp;P5">S&amp;P5</option>
                                                                                                                            <option value="S&amp;P500">S&amp;P500</option>
                                                                                                                            <option value="SMI (Swiss 20)">SMI (Swiss 20)</option>
                                                                                                                            <option value="SPX500">SPX500</option>
                                                                                                                            <option value="STOXX Europe 50">STOXX Europe 50</option>
                                                                                                                            <option value="UK100">UK100</option>
                                                                                                                            <option value="US30">US30</option>
                                                                                                                            <option value="US500">US500</option>
                                                                                                                            <option value="UT100">UT100</option>
                                                                                                                            <option value="WIG20 (Poland)">WIG20 (Poland)</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">

                                                        <label><input type="checkbox" name="meta[use_info_account][Available commodities]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Available commodities</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_account][Available commodities]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="Brent Oil">Brent Oil</option>
                                                                                                                            <option value="CL">CL</option>
                                                                                                                            <option value="CL Light Sweet Crude Oil">CL Light Sweet Crude Oil</option>
                                                                                                                            <option value="COCOA">COCOA</option>
                                                                                                                            <option value="COFFEE">COFFEE</option>
                                                                                                                            <option value="COPPER">COPPER</option>
                                                                                                                            <option value="CORN">CORN</option>
                                                                                                                            <option value="COTTON">COTTON</option>
                                                                                                                            <option value="Cocoa">Cocoa</option>
                                                                                                                            <option value="Coffee">Coffee</option>
                                                                                                                            <option value="Copper">Copper</option>
                                                                                                                            <option value="Corn">Corn</option>
                                                                                                                            <option value="Cotton">Cotton</option>
                                                                                                                            <option value="Crude Oil">Crude Oil</option>
                                                                                                                            <option value="GOLD">GOLD</option>
                                                                                                                            <option value="GOLD Spot">GOLD Spot</option>
                                                                                                                            <option value="GOLDEURO Spot">GOLDEURO Spot</option>
                                                                                                                            <option value="Gold">Gold</option>
                                                                                                                            <option value="HTOIL">HTOIL</option>
                                                                                                                            <option value="Heating Oil">Heating Oil</option>
                                                                                                                            <option value="KC(COFFEE)">KC(COFFEE)</option>
                                                                                                                            <option value="Light Sweet Crude Oil">Light Sweet Crude Oil</option>
                                                                                                                            <option value="N/A">N/A</option>
                                                                                                                            <option value="NG Natural Gas">NG Natural Gas</option>
                                                                                                                            <option value="NGAS">NGAS</option>
                                                                                                                            <option value="Natural Gas">Natural Gas</option>
                                                                                                                            <option value="PALLADIUM">PALLADIUM</option>
                                                                                                                            <option value="PLATINUM">PLATINUM</option>
                                                                                                                            <option value="Platinum">Platinum</option>
                                                                                                                            <option value="RBOB Gasoline">RBOB Gasoline</option>
                                                                                                                            <option value="SB(SUGAR)">SB(SUGAR)</option>
                                                                                                                            <option value="SILVER">SILVER</option>
                                                                                                                            <option value="SILVER Spot">SILVER Spot</option>
                                                                                                                            <option value="SILVEREURO Spot">SILVEREURO Spot</option>
                                                                                                                            <option value="SOYBEAN">SOYBEAN</option>
                                                                                                                            <option value="Silver">Silver</option>
                                                                                                                            <option value="Soybeans">Soybeans</option>
                                                                                                                            <option value="Sugar">Sugar</option>
                                                                                                                            <option value="UKOIL">UKOIL</option>
                                                                                                                            <option value="USOIL">USOIL</option>
                                                                                                                            <option value="WHEAT">WHEAT</option>
                                                                                                                            <option value="Wheat">Wheat</option>
                                                                                                                            <option value="XAGEUR">XAGEUR</option>
                                                                                                                            <option value="XAGUSD">XAGUSD</option>
                                                                                                                            <option value="XAGUSD(Silver)">XAGUSD(Silver)</option>
                                                                                                                            <option value="XAUEUR">XAUEUR</option>
                                                                                                                            <option value="XAUUSD">XAUUSD</option>
                                                                                                                            <option value="XAUUSD(Gold)">XAUUSD(Gold)</option>
                                                                                                                            <option value="brent oil">brent oil</option>
                                                                                                                            <option value="oil">oil</option>
                                                                                                                            <option value="silver">silver</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">

                                                        <label><input type="checkbox" name="meta[use_info_account][Available CFDs / Shares]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Available CFDs / Shares</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_account][Available CFDs / Shares]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="3M">3M</option>
                                                                                                                            <option value="3M Company">3M Company</option>
                                                                                                                            <option value="3i Group PLC">3i Group PLC</option>
                                                                                                                            <option value="AIG">AIG</option>
                                                                                                                            <option value="ALIBABA">ALIBABA</option>
                                                                                                                            <option value="ALIBABA HOLDINGS">ALIBABA HOLDINGS</option>
                                                                                                                            <option value="AMAZON">AMAZON</option>
                                                                                                                            <option value="AMAZON COM INC">AMAZON COM INC</option>
                                                                                                                            <option value="AMEC PLC">AMEC PLC</option>
                                                                                                                            <option value="AMERICAN EXPRESS GROUP INC">AMERICAN EXPRESS GROUP INC</option>
                                                                                                                            <option value="AMERICAN INTERNATIONAL GROUP INC">AMERICAN INTERNATIONAL GROUP INC</option>
                                                                                                                            <option value="AMEX">AMEX</option>
                                                                                                                            <option value="APPLE">APPLE</option>
                                                                                                                            <option value="ARM Holdings PLC">ARM Holdings PLC</option>
                                                                                                                            <option value="AT&amp;T INC">AT&amp;T INC</option>
                                                                                                                            <option value="ATandT Inc.">ATandT Inc.</option>
                                                                                                                            <option value="AUS200.cfd">AUS200.cfd</option>
                                                                                                                            <option value="AXA SA">AXA SA</option>
                                                                                                                            <option value="Aberdeen Asset Management PLC">Aberdeen Asset Management PLC</option>
                                                                                                                            <option value="Accor SA">Accor SA</option>
                                                                                                                            <option value="Adidas AG">Adidas AG</option>
                                                                                                                            <option value="Admiral Group PLC">Admiral Group PLC</option>
                                                                                                                            <option value="Aggreko PLC">Aggreko PLC</option>
                                                                                                                            <option value="Air Liquide SA">Air Liquide SA</option>
                                                                                                                            <option value="Airbus Group SE">Airbus Group SE</option>
                                                                                                                            <option value="Alcatel Lucent">Alcatel Lucent</option>
                                                                                                                            <option value="Alcatel-Lucent">Alcatel-Lucent</option>
                                                                                                                            <option value="Alcoa">Alcoa</option>
                                                                                                                            <option value="AliBaba">AliBaba</option>
                                                                                                                            <option value="Alibaba">Alibaba</option>
                                                                                                                            <option value="Allianz SE">Allianz SE</option>
                                                                                                                            <option value="Alstom SA">Alstom SA</option>
                                                                                                                            <option value="Amazon">Amazon</option>
                                                                                                                            <option value="American Express Company">American Express Company</option>
                                                                                                                            <option value="American International Group">American International Group</option>
                                                                                                                            <option value="Anglo American PLC">Anglo American PLC</option>
                                                                                                                            <option value="Antofagasta PLC">Antofagasta PLC</option>
                                                                                                                            <option value="Apple">Apple</option>
                                                                                                                            <option value="Apple Inc.">Apple Inc.</option>
                                                                                                                            <option value="ArcelorMittal">ArcelorMittal</option>
                                                                                                                            <option value="Ashtead Group PLC">Ashtead Group PLC</option>
                                                                                                                            <option value="Associated British Foods PLC">Associated British Foods PLC</option>
                                                                                                                            <option value="AstraZeneca PLC">AstraZeneca PLC</option>
                                                                                                                            <option value="Aviva PLC">Aviva PLC</option>
                                                                                                                            <option value="BAE Systems PLC">BAE Systems PLC</option>
                                                                                                                            <option value="BANK of AMERICA">BANK of AMERICA</option>
                                                                                                                            <option value="BASF SE">BASF SE</option>
                                                                                                                            <option value="BG Group PLC">BG Group PLC</option>
                                                                                                                            <option value="BHP Billiton PLC">BHP Billiton PLC</option>
                                                                                                                            <option value="BMW">BMW</option>
                                                                                                                            <option value="BNP Paribas">BNP Paribas</option>
                                                                                                                            <option value="BNP Paribas SA">BNP Paribas SA</option>
                                                                                                                            <option value="BOEING">BOEING</option>
                                                                                                                            <option value="BP PLC">BP PLC</option>
                                                                                                                            <option value="BT Group PLC">BT Group PLC</option>
                                                                                                                            <option value="Babcock International Group PLC">Babcock International Group PLC</option>
                                                                                                                            <option value="Balfour Beatty PLC">Balfour Beatty PLC</option>
                                                                                                                            <option value="Bank of America">Bank of America</option>
                                                                                                                            <option value="Barclays PLC">Barclays PLC</option>
                                                                                                                            <option value="Barratt Developments PLC">Barratt Developments PLC</option>
                                                                                                                            <option value="Bayer AG">Bayer AG</option>
                                                                                                                            <option value="Bayerische Motoren Werke AG">Bayerische Motoren Werke AG</option>
                                                                                                                            <option value="Beiersdorf AG">Beiersdorf AG</option>
                                                                                                                            <option value="Betfair Group PLC">Betfair Group PLC</option>
                                                                                                                            <option value="Boeing">Boeing</option>
                                                                                                                            <option value="Boeing Corp">Boeing Corp</option>
                                                                                                                            <option value="Bouygues SA">Bouygues SA</option>
                                                                                                                            <option value="Bovis Homes Group PLC">Bovis Homes Group PLC</option>
                                                                                                                            <option value="Brent Oil">Brent Oil</option>
                                                                                                                            <option value="British American Tobacco PLC">British American Tobacco PLC</option>
                                                                                                                            <option value="British Land Co PLC/The">British Land Co PLC/The</option>
                                                                                                                            <option value="British Sky Broadcasting Group PLC">British Sky Broadcasting Group PLC</option>
                                                                                                                            <option value="Bunzl PLC">Bunzl PLC</option>
                                                                                                                            <option value="Burberry Group PLC">Burberry Group PLC</option>
                                                                                                                            <option value="CAC">CAC</option>
                                                                                                                            <option value="CATERPILLAR INC">CATERPILLAR INC</option>
                                                                                                                            <option value="CH20.cfd">CH20.cfd</option>
                                                                                                                            <option value="CHEVRON CORP">CHEVRON CORP</option>
                                                                                                                            <option value="CISCO SYSTEMS INC">CISCO SYSTEMS INC</option>
                                                                                                                            <option value="CITIGROUP INC">CITIGROUP INC</option>
                                                                                                                            <option value="COCA COLA">COCA COLA</option>
                                                                                                                            <option value="CRH PLC">CRH PLC</option>
                                                                                                                            <option value="Candy Crush">Candy Crush</option>
                                                                                                                            <option value="Cap Gemini SA">Cap Gemini SA</option>
                                                                                                                            <option value="Capita PLC">Capita PLC</option>
                                                                                                                            <option value="Carnival PLC">Carnival PLC</option>
                                                                                                                            <option value="Carrefour SA">Carrefour SA</option>
                                                                                                                            <option value="Caterpillar Inc.">Caterpillar Inc.</option>
                                                                                                                            <option value="Centrica PLC">Centrica PLC</option>
                                                                                                                            <option value="Chevron">Chevron</option>
                                                                                                                            <option value="Cie Generale des Etablissements Michelin">Cie Generale des Etablissements Michelin</option>
                                                                                                                            <option value="Cie de Saint-Gobain">Cie de Saint-Gobain</option>
                                                                                                                            <option value="Cisco Systems Inc.">Cisco Systems Inc.</option>
                                                                                                                            <option value="Citigroup">Citigroup</option>
                                                                                                                            <option value="Citigroup Inc.">Citigroup Inc.</option>
                                                                                                                            <option value="Cobham PLC">Cobham PLC</option>
                                                                                                                            <option value="CocaCola">CocaCola</option>
                                                                                                                            <option value="Coffee">Coffee</option>
                                                                                                                            <option value="Compass Group PLC">Compass Group PLC</option>
                                                                                                                            <option value="Continental AG">Continental AG</option>
                                                                                                                            <option value="Copper">Copper</option>
                                                                                                                            <option value="Copper.cfd">Copper.cfd</option>
                                                                                                                            <option value="Corn">Corn</option>
                                                                                                                            <option value="Credit Agricole SA">Credit Agricole SA</option>
                                                                                                                            <option value="Crude Oil">Crude Oil</option>
                                                                                                                            <option value="DAX">DAX</option>
                                                                                                                            <option value="DE30.cfd">DE30.cfd</option>
                                                                                                                            <option value="DOW">DOW</option>
                                                                                                                            <option value="Daimler AG">Daimler AG</option>
                                                                                                                            <option value="Danone SA">Danone SA</option>
                                                                                                                            <option value="Deutsche Bank">Deutsche Bank</option>
                                                                                                                            <option value="Deutsche Bank AG">Deutsche Bank AG</option>
                                                                                                                            <option value="Deutsche Boerse AG">Deutsche Boerse AG</option>
                                                                                                                            <option value="Deutsche Lufthansa AG">Deutsche Lufthansa AG</option>
                                                                                                                            <option value="Deutsche Post AG">Deutsche Post AG</option>
                                                                                                                            <option value="Deutsche Telekom AG">Deutsche Telekom AG</option>
                                                                                                                            <option value="Diageo PLC">Diageo PLC</option>
                                                                                                                            <option value="Direct Line Insurance Group PLC">Direct Line Insurance Group PLC</option>
                                                                                                                            <option value="Disney">Disney</option>
                                                                                                                            <option value="Dixons Carphone PLC">Dixons Carphone PLC</option>
                                                                                                                            <option value="Drax Group PLC">Drax Group PLC</option>
                                                                                                                            <option value="E-COMMERCE CHINA DANGDANG">E-COMMERCE CHINA DANGDANG</option>
                                                                                                                            <option value="E.ON SE">E.ON SE</option>
                                                                                                                            <option value="EBAY INC">EBAY INC</option>
                                                                                                                            <option value="ELECTRONIC ARTS">ELECTRONIC ARTS</option>
                                                                                                                            <option value="ESP35.cfd">ESP35.cfd</option>
                                                                                                                            <option value="EU50.cfd">EU50.cfd</option>
                                                                                                                            <option value="EXXON MOBIL">EXXON MOBIL</option>
                                                                                                                            <option value="EXXON MOBILE">EXXON MOBILE</option>
                                                                                                                            <option value="Electricite de France SA">Electricite de France SA</option>
                                                                                                                            <option value="Engie">Engie</option>
                                                                                                                            <option value="Equinix">Equinix</option>
                                                                                                                            <option value="Essilor International SA">Essilor International SA</option>
                                                                                                                            <option value="Experian PLC">Experian PLC</option>
                                                                                                                            <option value="Exxon Mobil">Exxon Mobil</option>
                                                                                                                            <option value="Exxon Mobil Corporation">Exxon Mobil Corporation</option>
                                                                                                                            <option value="FACEBOOK">FACEBOOK</option>
                                                                                                                            <option value="FEDEX CORP">FEDEX CORP</option>
                                                                                                                            <option value="FORD MOTOR CO">FORD MOTOR CO</option>
                                                                                                                            <option value="FRA40.cfd">FRA40.cfd</option>
                                                                                                                            <option value="FTSE">FTSE</option>
                                                                                                                            <option value="Facebook">Facebook</option>
                                                                                                                            <option value="Facebook Inc.">Facebook Inc.</option>
                                                                                                                            <option value="Ferrari">Ferrari</option>
                                                                                                                            <option value="Fiat Crysler">Fiat Crysler</option>
                                                                                                                            <option value="Ford">Ford</option>
                                                                                                                            <option value="Ford Motor Co.">Ford Motor Co.</option>
                                                                                                                            <option value="Fresenius Medical Care AG &amp; Co KGaA">Fresenius Medical Care AG &amp; Co KGaA</option>
                                                                                                                            <option value="Fresenius SE &amp; Co KGaA">Fresenius SE &amp; Co KGaA</option>
                                                                                                                            <option value="Friends Life Group Ltd">Friends Life Group Ltd</option>
                                                                                                                            <option value="G4S PLC">G4S PLC</option>
                                                                                                                            <option value="GENERAL ELECTRIC">GENERAL ELECTRIC</option>
                                                                                                                            <option value="GENERAL MOTORS CO">GENERAL MOTORS CO</option>
                                                                                                                            <option value="GKN PLC">GKN PLC</option>
                                                                                                                            <option value="GOLDMAN SACHS">GOLDMAN SACHS</option>
                                                                                                                            <option value="GOOGLE">GOOGLE</option>
                                                                                                                            <option value="General Electric Co">General Electric Co</option>
                                                                                                                            <option value="General Electric Company">General Electric Company</option>
                                                                                                                            <option value="GlaxoSmithKline PLC">GlaxoSmithKline PLC</option>
                                                                                                                            <option value="Glencore PLC">Glencore PLC</option>
                                                                                                                            <option value="GoDaddy">GoDaddy</option>
                                                                                                                            <option value="GoPro">GoPro</option>
                                                                                                                            <option value="Goldman Sachs">Goldman Sachs</option>
                                                                                                                            <option value="Google">Google</option>
                                                                                                                            <option value="Google Inc.">Google Inc.</option>
                                                                                                                            <option value="HEWLETT-PACKARD CO">HEWLETT-PACKARD CO</option>
                                                                                                                            <option value="HK50.cfd">HK50.cfd</option>
                                                                                                                            <option value="HOME DEPOT INC">HOME DEPOT INC</option>
                                                                                                                            <option value="HSBC Holdings PLC">HSBC Holdings PLC</option>
                                                                                                                            <option value="Hammerson PLC">Hammerson PLC</option>
                                                                                                                            <option value="HeidelbergCement AG">HeidelbergCement AG</option>
                                                                                                                            <option value="Henkel AG &amp; Co KGaA">Henkel AG &amp; Co KGaA</option>
                                                                                                                            <option value="Home Retail Group PLC">Home Retail Group PLC</option>
                                                                                                                            <option value="IBM">IBM</option>
                                                                                                                            <option value="ICAP PLC">ICAP PLC</option>
                                                                                                                            <option value="IG Group Holdings PLC">IG Group Holdings PLC</option>
                                                                                                                            <option value="IMI PLC">IMI PLC</option>
                                                                                                                            <option value="INTEL CORP">INTEL CORP</option>
                                                                                                                            <option value="INTERNATIONAL BUSINESS MACHINES CORP">INTERNATIONAL BUSINESS MACHINES CORP</option>
                                                                                                                            <option value="ITV PLC">ITV PLC</option>
                                                                                                                            <option value="Imperial Tobacco Group PLC">Imperial Tobacco Group PLC</option>
                                                                                                                            <option value="Inchcape PLC">Inchcape PLC</option>
                                                                                                                            <option value="Infineon Technologies AG">Infineon Technologies AG</option>
                                                                                                                            <option value="Inmarsat PLC">Inmarsat PLC</option>
                                                                                                                            <option value="Intel Corp.">Intel Corp.</option>
                                                                                                                            <option value="InterContinental Hotels Group PLC">InterContinental Hotels Group PLC</option>
                                                                                                                            <option value="International Business Machines">International Business Machines</option>
                                                                                                                            <option value="International Consolidated Airlines Grou">International Consolidated Airlines Grou</option>
                                                                                                                            <option value="Intertek Group PLC">Intertek Group PLC</option>
                                                                                                                            <option value="J Sainsbury PLC">J Sainsbury PLC</option>
                                                                                                                            <option value="JD.COM">JD.COM</option>
                                                                                                                            <option value="JOHNSON AND JOHNSON">JOHNSON AND JOHNSON</option>
                                                                                                                            <option value="JPMORGAN CHASE &amp; CO">JPMORGAN CHASE &amp; CO</option>
                                                                                                                            <option value="JPMorgan">JPMorgan</option>
                                                                                                                            <option value="JPMorgan Chase and Co.">JPMorgan Chase and Co.</option>
                                                                                                                            <option value="JPN225.cfd">JPN225.cfd</option>
                                                                                                                            <option value="Johnson Matthey PLC">Johnson Matthey PLC</option>
                                                                                                                            <option value="K+S AG">K+S AG</option>
                                                                                                                            <option value="KRAFT FOODS GROUP INC">KRAFT FOODS GROUP INC</option>
                                                                                                                            <option value="Kandi Technology">Kandi Technology</option>
                                                                                                                            <option value="Kering">Kering</option>
                                                                                                                            <option value="Kingfisher PLC">Kingfisher PLC</option>
                                                                                                                            <option value="Kite Pharma">Kite Pharma</option>
                                                                                                                            <option value="LANXESS AG">LANXESS AG</option>
                                                                                                                            <option value="LVMH Moet Hennessy Louis Vuitton SE">LVMH Moet Hennessy Louis Vuitton SE</option>
                                                                                                                            <option value="Ladbrokes PLC">Ladbrokes PLC</option>
                                                                                                                            <option value="Lafarge SA">Lafarge SA</option>
                                                                                                                            <option value="Land Securities Group PLC">Land Securities Group PLC</option>
                                                                                                                            <option value="Legal &amp; General Group PLC">Legal &amp; General Group PLC</option>
                                                                                                                            <option value="Legrand SA">Legrand SA</option>
                                                                                                                            <option value="Linde AG">Linde AG</option>
                                                                                                                            <option value="Lloyds Banking Group PLC">Lloyds Banking Group PLC</option>
                                                                                                                            <option value="London Stock Exchange Group PLC">London Stock Exchange Group PLC</option>
                                                                                                                            <option value="L’Oreal SA">L’Oreal SA</option>
                                                                                                                            <option value="MICROSOFT">MICROSOFT</option>
                                                                                                                            <option value="MORGAN STANLEY">MORGAN STANLEY</option>
                                                                                                                            <option value="Man Group PLC">Man Group PLC</option>
                                                                                                                            <option value="Marks &amp; Spencer Group PLC">Marks &amp; Spencer Group PLC</option>
                                                                                                                            <option value="MasterCard">MasterCard</option>
                                                                                                                            <option value="Mc DONALDS">Mc DONALDS</option>
                                                                                                                            <option value="McDonald's Corp.">McDonald's Corp.</option>
                                                                                                                            <option value="Meggitt PLC">Meggitt PLC</option>
                                                                                                                            <option value="Merck KGaA">Merck KGaA</option>
                                                                                                                            <option value="Micron Technology Inc.">Micron Technology Inc.</option>
                                                                                                                            <option value="Microsoft">Microsoft</option>
                                                                                                                            <option value="Microsoft Corporation">Microsoft Corporation</option>
                                                                                                                            <option value="Mondi PLC">Mondi PLC</option>
                                                                                                                            <option value="More...">More...</option>
                                                                                                                            <option value="N/A">N/A</option>
                                                                                                                            <option value="NASDAQ">NASDAQ</option>
                                                                                                                            <option value="NETFLIX">NETFLIX</option>
                                                                                                                            <option value="NGAS.cfd">NGAS.cfd</option>
                                                                                                                            <option value="NIKE">NIKE</option>
                                                                                                                            <option value="National Grid PLC">National Grid PLC</option>
                                                                                                                            <option value="Natural Gas">Natural Gas</option>
                                                                                                                            <option value="Next PLC">Next PLC</option>
                                                                                                                            <option value="Nike">Nike</option>
                                                                                                                            <option value="No">No</option>
                                                                                                                            <option value="Nokia">Nokia</option>
                                                                                                                            <option value="ORACLE CORP">ORACLE CORP</option>
                                                                                                                            <option value="Ocado Group PLC">Ocado Group PLC</option>
                                                                                                                            <option value="Old Mutual PLC">Old Mutual PLC</option>
                                                                                                                            <option value="Oracle Corporation">Oracle Corporation</option>
                                                                                                                            <option value="Orange SA">Orange SA</option>
                                                                                                                            <option value="PEPSICO INC">PEPSICO INC</option>
                                                                                                                            <option value="PFIZER INC">PFIZER INC</option>
                                                                                                                            <option value="PHILLIP MORRIS INTERNATIONAL INC">PHILLIP MORRIS INTERNATIONAL INC</option>
                                                                                                                            <option value="PROCTER &amp; GAMBLE CO">PROCTER &amp; GAMBLE CO</option>
                                                                                                                            <option value="PayPal">PayPal</option>
                                                                                                                            <option value="Pearson PLC">Pearson PLC</option>
                                                                                                                            <option value="Pennon Group PLC">Pennon Group PLC</option>
                                                                                                                            <option value="Pernod Ricard SA">Pernod Ricard SA</option>
                                                                                                                            <option value="Persimmon PLC">Persimmon PLC</option>
                                                                                                                            <option value="Petrofac Ltd">Petrofac Ltd</option>
                                                                                                                            <option value="Peugeot SA">Peugeot SA</option>
                                                                                                                            <option value="Pfizer Inc.">Pfizer Inc.</option>
                                                                                                                            <option value="Premier Oil PLC">Premier Oil PLC</option>
                                                                                                                            <option value="Procter and Gamble Co.">Procter and Gamble Co.</option>
                                                                                                                            <option value="Prudential PLC">Prudential PLC</option>
                                                                                                                            <option value="Publicis Groupe SA">Publicis Groupe SA</option>
                                                                                                                            <option value="RSA Insurance Group PLC">RSA Insurance Group PLC</option>
                                                                                                                            <option value="RWE AG">RWE AG</option>
                                                                                                                            <option value="Randgold Resources Ltd">Randgold Resources Ltd</option>
                                                                                                                            <option value="Reckitt Benckiser Group PLC">Reckitt Benckiser Group PLC</option>
                                                                                                                            <option value="Reed Elsevier PLC">Reed Elsevier PLC</option>
                                                                                                                            <option value="Renault">Renault</option>
                                                                                                                            <option value="Renault SA">Renault SA</option>
                                                                                                                            <option value="Rentokil Initial PLC">Rentokil Initial PLC</option>
                                                                                                                            <option value="Rexam PLC">Rexam PLC</option>
                                                                                                                            <option value="Rightmove PLC">Rightmove PLC</option>
                                                                                                                            <option value="Rio Tinto PLC">Rio Tinto PLC</option>
                                                                                                                            <option value="Rolls-Royce Holdings PLC">Rolls-Royce Holdings PLC</option>
                                                                                                                            <option value="Royal Bank of Scotland Group PLC">Royal Bank of Scotland Group PLC</option>
                                                                                                                            <option value="Royal Dutch Shell PLC">Royal Dutch Shell PLC</option>
                                                                                                                            <option value="Royal Dutch Shell PLC">Royal Dutch Shell PLC</option>
                                                                                                                            <option value="Royal Mail PLC">Royal Mail PLC</option>
                                                                                                                            <option value="S&amp;P500">S&amp;P500</option>
                                                                                                                            <option value="SABMiller PLC">SABMiller PLC</option>
                                                                                                                            <option value="SAP SE">SAP SE</option>
                                                                                                                            <option value="SSE PLC">SSE PLC</option>
                                                                                                                            <option value="STARBUCKS CORP">STARBUCKS CORP</option>
                                                                                                                            <option value="Safran SA">Safran SA</option>
                                                                                                                            <option value="Sage Group PLC/The">Sage Group PLC/The</option>
                                                                                                                            <option value="Sanofi">Sanofi</option>
                                                                                                                            <option value="Schneider Electric SE">Schneider Electric SE</option>
                                                                                                                            <option value="Severn Trent PLC">Severn Trent PLC</option>
                                                                                                                            <option value="Shire PLC">Shire PLC</option>
                                                                                                                            <option value="Siemens">Siemens</option>
                                                                                                                            <option value="Siemens AG">Siemens AG</option>
                                                                                                                            <option value="Smith &amp; Nephew PLC">Smith &amp; Nephew PLC</option>
                                                                                                                            <option value="Smiths Group PLC">Smiths Group PLC</option>
                                                                                                                            <option value="Societe Generale SA">Societe Generale SA</option>
                                                                                                                            <option value="Solvay SA">Solvay SA</option>
                                                                                                                            <option value="Sprint Nextel Corp.">Sprint Nextel Corp.</option>
                                                                                                                            <option value="St James’s Place PLC">St James’s Place PLC</option>
                                                                                                                            <option value="Standard Chartered PLC">Standard Chartered PLC</option>
                                                                                                                            <option value="Standard Life PLC">Standard Life PLC</option>
                                                                                                                            <option value="Sugar">Sugar</option>
                                                                                                                            <option value="TESLA">TESLA</option>
                                                                                                                            <option value="TESLA MOTORS">TESLA MOTORS</option>
                                                                                                                            <option value="TIME WARNER INC">TIME WARNER INC</option>
                                                                                                                            <option value="TUI Travel PLC">TUI Travel PLC</option>
                                                                                                                            <option value="TWITTER">TWITTER</option>
                                                                                                                            <option value="Taylor Wimpey PLC">Taylor Wimpey PLC</option>
                                                                                                                            <option value="Technip SA">Technip SA</option>
                                                                                                                            <option value="Tesco PLC">Tesco PLC</option>
                                                                                                                            <option value="Tesla">Tesla</option>
                                                                                                                            <option value="Texas Instruments Inc.">Texas Instruments Inc.</option>
                                                                                                                            <option value="The Boeing Company">The Boeing Company</option>
                                                                                                                            <option value="The Coca-Cola Company">The Coca-Cola Company</option>
                                                                                                                            <option value="Thomas Cook Group PLC">Thomas Cook Group PLC</option>
                                                                                                                            <option value="ThyssenKrupp AG">ThyssenKrupp AG</option>
                                                                                                                            <option value="Total SA">Total SA</option>
                                                                                                                            <option value="Total SA">Total SA</option>
                                                                                                                            <option value="Travis Perkins PLC">Travis Perkins PLC</option>
                                                                                                                            <option value="Tullow Oil PLC">Tullow Oil PLC</option>
                                                                                                                            <option value="Twitter">Twitter</option>
                                                                                                                            <option value="UK100.cfd">UK100.cfd</option>
                                                                                                                            <option value="UKOil.cfd">UKOil.cfd</option>
                                                                                                                            <option value="US30.cfd">US30.cfd</option>
                                                                                                                            <option value="US500.cfd">US500.cfd</option>
                                                                                                                            <option value="USOil.cfd">USOil.cfd</option>
                                                                                                                            <option value="UT100.cfd">UT100.cfd</option>
                                                                                                                            <option value="Unibail-Rodamco SE">Unibail-Rodamco SE</option>
                                                                                                                            <option value="Unilever PLC">Unilever PLC</option>
                                                                                                                            <option value="United Utilities Group PLC">United Utilities Group PLC</option>
                                                                                                                            <option value="VERIZON COMMUNICATIONS INC">VERIZON COMMUNICATIONS INC</option>
                                                                                                                            <option value="VIACOM INC">VIACOM INC</option>
                                                                                                                            <option value="VIPSHOP HOLDINGS">VIPSHOP HOLDINGS</option>
                                                                                                                            <option value="VISA">VISA</option>
                                                                                                                            <option value="Valeo SA">Valeo SA</option>
                                                                                                                            <option value="Veolia Environnement SA">Veolia Environnement SA</option>
                                                                                                                            <option value="Vinci SA">Vinci SA</option>
                                                                                                                            <option value="Visa">Visa</option>
                                                                                                                            <option value="Vivendi SA">Vivendi SA</option>
                                                                                                                            <option value="Vodafone Group PLC">Vodafone Group PLC</option>
                                                                                                                            <option value="Volkswagen">Volkswagen</option>
                                                                                                                            <option value="Volkswagen AG">Volkswagen AG</option>
                                                                                                                            <option value="WALMART">WALMART</option>
                                                                                                                            <option value="WALT DISNEY CO">WALT DISNEY CO</option>
                                                                                                                            <option value="WELLS FARGO &amp; CO">WELLS FARGO &amp; CO</option>
                                                                                                                            <option value="WM Morrison Supermarkets PLC">WM Morrison Supermarkets PLC</option>
                                                                                                                            <option value="WPP PLC">WPP PLC</option>
                                                                                                                            <option value="Wal-Mart">Wal-Mart</option>
                                                                                                                            <option value="Walt Disney Company">Walt Disney Company</option>
                                                                                                                            <option value="Weir Group PLC/The">Weir Group PLC/The</option>
                                                                                                                            <option value="Wells Fargo and Company">Wells Fargo and Company</option>
                                                                                                                            <option value="Wheat">Wheat</option>
                                                                                                                            <option value="Whitbread PLC">Whitbread PLC</option>
                                                                                                                            <option value="William Hill PLC">William Hill PLC</option>
                                                                                                                            <option value="Wolseley PLC">Wolseley PLC</option>
                                                                                                                            <option value="XAGUSD">XAGUSD</option>
                                                                                                                            <option value="XAUUSD">XAUUSD</option>
                                                                                                                            <option value="YAHOO">YAHOO</option>
                                                                                                                            <option value="YAHOO! INC">YAHOO! INC</option>
                                                                                                                            <option value="Yahoo!">Yahoo!</option>
                                                                                                                            <option value="Yahoo! Inc.">Yahoo! Inc.</option>
                                                                                                                            <option value="eBay">eBay</option>
                                                                                                                            <option value="easyJet PLC">easyJet PLC</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">

                                                        <label><input type="checkbox" name="meta[use_info_account][Bitcoin]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Bitcoin</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_account][Bitcoin]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="No">No</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">

                                                        <label><input type="checkbox" name="meta[use_info_account][USD Index]" checked="checked" class="gray-chekbox"> <span class="zForm-text">USD Index</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_account][USD Index]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="No">No</option>
                                                                                                                            <option value="Yes">Yes</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">

                                                        <label><input type="checkbox" name="meta[use_info_account][Funding Methods]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Funding Methods</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_account][Funding Methods]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="Bank Wire">Bank Wire</option>
                                                                                                                            <option value="Bank wire">Bank wire</option>
                                                                                                                            <option value="Barclay Card">Barclay Card</option>
                                                                                                                            <option value="Barclays">Barclays</option>
                                                                                                                            <option value="CASHU">CASHU</option>
                                                                                                                            <option value="CashU">CashU</option>
                                                                                                                            <option value="Credit Card">Credit Card</option>
                                                                                                                            <option value="Credit card">Credit card</option>
                                                                                                                            <option value="Credit cards">Credit cards</option>
                                                                                                                            <option value="Debit Card">Debit Card</option>
                                                                                                                            <option value="Debit card">Debit card</option>
                                                                                                                            <option value="FasaPay">FasaPay</option>
                                                                                                                            <option value="Fasapay">Fasapay</option>
                                                                                                                            <option value="GiroPay">GiroPay</option>
                                                                                                                            <option value="K-Net">K-Net</option>
                                                                                                                            <option value="Local Bank Transfer">Local Bank Transfer</option>
                                                                                                                            <option value="Neteller">Neteller</option>
                                                                                                                            <option value="Ok Pay">Ok Pay</option>
                                                                                                                            <option value="Over 35 ways to make deposits and withdrawals">Over 35 ways to make deposits and withdrawals</option>
                                                                                                                            <option value="Paypal">Paypal</option>
                                                                                                                            <option value="Przelewy24">Przelewy24</option>
                                                                                                                            <option value="QIWI">QIWI</option>
                                                                                                                            <option value="Qiwi">Qiwi</option>
                                                                                                                            <option value="SafeCharge">SafeCharge</option>
                                                                                                                            <option value="Skrill">Skrill</option>
                                                                                                                            <option value="Sofort">Sofort</option>
                                                                                                                            <option value="Union Pay">Union Pay</option>
                                                                                                                            <option value="UnionPay">UnionPay</option>
                                                                                                                            <option value="Web Money">Web Money</option>
                                                                                                                            <option value="WebMoney">WebMoney</option>
                                                                                                                            <option value="Yandex">Yandex</option>
                                                                                                                            <option value="Yandex Money">Yandex Money</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">

                                                        <label><input type="checkbox" name="meta[use_info_account][Withdrawal Methods]" checked="checked" class="gray-chekbox"> <span class="zForm-text">Withdrawal Methods</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_account][Withdrawal Methods]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="Bank Wire">Bank Wire</option>
                                                                                                                            <option value="Bank wire">Bank wire</option>
                                                                                                                            <option value="Barclay Card">Barclay Card</option>
                                                                                                                            <option value="Barclays">Barclays</option>
                                                                                                                            <option value="CASHU">CASHU</option>
                                                                                                                            <option value="CashU">CashU</option>
                                                                                                                            <option value="Credit Card">Credit Card</option>
                                                                                                                            <option value="Credit card">Credit card</option>
                                                                                                                            <option value="Credit cards">Credit cards</option>
                                                                                                                            <option value="Debit Card">Debit Card</option>
                                                                                                                            <option value="Debit card">Debit card</option>
                                                                                                                            <option value="FasaPay">FasaPay</option>
                                                                                                                            <option value="Fasapay">Fasapay</option>
                                                                                                                            <option value="GiroPay">GiroPay</option>
                                                                                                                            <option value="ICM Capital Prepaid MasterCard">ICM Capital Prepaid MasterCard</option>
                                                                                                                            <option value="K-Net">K-Net</option>
                                                                                                                            <option value="Local Bank Transfer">Local Bank Transfer</option>
                                                                                                                            <option value="Neteller">Neteller</option>
                                                                                                                            <option value="Ok Pay">Ok Pay</option>
                                                                                                                            <option value="Over 35 ways to make deposits and withdrawals">Over 35 ways to make deposits and withdrawals</option>
                                                                                                                            <option value="Paypal">Paypal</option>
                                                                                                                            <option value="Przelewy24">Przelewy24</option>
                                                                                                                            <option value="QIWI">QIWI</option>
                                                                                                                            <option value="Qiwi">Qiwi</option>
                                                                                                                            <option value="SafeCharge">SafeCharge</option>
                                                                                                                            <option value="Skrill">Skrill</option>
                                                                                                                            <option value="Sofort">Sofort</option>
                                                                                                                            <option value="Union Pay">Union Pay</option>
                                                                                                                            <option value="UnionPay">UnionPay</option>
                                                                                                                            <option value="Web Money">Web Money</option>
                                                                                                                            <option value="WebMoney">WebMoney</option>
                                                                                                                            <option value="Yandex">Yandex</option>
                                                                                                                            <option value="Yandex Money">Yandex Money</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                            <div class="zForm-row rightFormat">
                                                    <div class="zForm-col">

                                                        <label><input type="checkbox" name="meta[use_info_account][ECN Account]" checked="checked" class="gray-chekbox"> <span class="zForm-text">ECN Account</span></label>
                                                    </div>
                                                    <div class="zForm-col">
                                                        <select class="box-shadow" name="meta[info_account][ECN Account]">
                                                            <option value="0" disabled="" selected="selected">--------</option>
                                                                                                                            <option value="$5">$5</option>
                                                                                                                            <option value="000">000</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                                                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="zForm-buttons">
                        <button type="reset" class="btn btn-primary btn-smm">RESET</button>
                        <a href="#" id="search_by_meta" class="btn btn-danger btn-smm"><div class="icon icon_smolSear"></div>SEARCH</a>
                                                <select class="box-shadow">
                            <option value="0" disabled="" selected="selected">--------</option>
                                                            <option value="ads_securities_london">ADS Securities London</option>
                                                            <option value="fxgrow">FxGrow</option>
                                                            <option value="icm-capital-limited">ICM Capital Limited</option>
                                                            <option value="orbex">Orbex</option>
                                                            <option value="fidelis-capital-markets">Fidelis CM</option>
                                                            <option value="sto">STO</option>
                                                            <option value="exness">Exness</option>
                                                            <option value="plus500">Plus500</option>
                                                            <option value="triomarkets">TrioMarkets</option>
                                                            <option value="hy-markets">HY Markets</option>
                                                            <option value="alpari">Alpari</option>
                                                            <option value="acm-gold">ACM Gold</option>
                                                            <option value="etoro">eToro</option>
                                                            <option value="avatrade">AvaTrade</option>
                                                            <option value="octafx">OctaFX</option>
                                                            <option value="forextime">ForexTime</option>
                                                            <option value="fxpro">FXPro</option>
                                                            <option value="admiral-markets">Admiral Markets</option>
                                                            <option value="xm">XM</option>
                                                            <option value="fxprimus">FXPRIMUS</option>
                                                            <option value="ironfx">IronFX</option>
                                                            <option value="trade360">Trade360</option>
                                                            <option value="acfx">ACFX (license suspended)</option>
                                                    </select>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="company-filter-results">
            <div class="column">
                                    <div class="zTable table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <td>A to Z APPROVED</td>
                            <td>FOREX BROKER</td>
                            <td>HEADQUARTER</td>
                            <td>REGULATION</td>
                            <td>PLATFORMS</td>
                            <td>MORE INFORMATION</td>
                            <td>OPEN ACCOUNT</td>
                        </tr>
                        </thead>
                        <tbody>
                                                    <tr>
                            <td>
                                <div class="approved">
                                                                        <img src="../verstka/images/approved.png" alt="Approved by investorz">
                                                                    </div>
                            </td>
                            <td>
                                <div class="broker-table">
                                    <a href="ads_securities_london/index.html"><img src="../wp-content/uploads/2015/11/ads-LOGO-167x43.png" alt="ADS Securities London"></a>
                                </div>
                            </td>
                            <td>UK</td>
                            <td>FCA</td>
                            <td>
                                <div class="number-table">
                                    <span>2</span>
                                    <a href="ads_securities_london/index.html">
                                        <i class="icon icon-numberTable"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="readMore">
                                    <a href="ads_securities_london/index.html">More info</a>
                                </div>
                            </td>
                            <td>
                                <div class="buttonTable">
                                                                        <a href="../../external.html?link=https://my.ads-securities.co.uk/client-portal-web/uk/signup.html?utm_source=cpm&amp;utm_medium=broker-profile&amp;utm_campaign=2015-q4-investorz&amp;cmp=investorz" class="btn btn-account" target="_blank">LIVE ACCOUNT</a>
                                                                                                            <a href="../../external.html?link=http://www.ads-securities.co.uk/accounts/demo-account/?utm_source=cpm&amp;utm_medium=broker-profile&amp;utm_campaign=2015-q4-investorz&amp;cmp=investorz" class="btn btn-demo" target="_blank">DEMO ACCOUNT</a>
                                                                    </div>
                            </td>
                        </tr>
                                                    <tr>
                            <td>
                                <div class="approved">
                                                                        <img src="../verstka/images/approved.png" alt="Approved by investorz">
                                                                    </div>
                            </td>
                            <td>
                                <div class="broker-table">
                                    <a href="orbex/index.html"><img src="../wp-content/uploads/2015/11/Orbex-logo-113x43.png" alt="Orbex"></a>
                                </div>
                            </td>
                            <td>Cyprus</td>
                            <td>CySEC</td>
                            <td>
                                <div class="number-table">
                                    <span>2</span>
                                    <a href="orbex/index.html">
                                        <i class="icon icon-numberTable"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="readMore">
                                    <a href="orbex/index.html">More info</a>
                                </div>
                            </td>
                            <td>
                                <div class="buttonTable">
                                                                        <a href="../../external.html?link=https://www.orbex.com/en/open-real-account?ref_id=1122" class="btn btn-account" target="_blank">LIVE ACCOUNT</a>
                                                                                                            <a href="../../external.html?link=https://www.orbex.com/en/promotion/tradingonMT4?ref_id=1122" class="btn btn-demo" target="_blank">DEMO ACCOUNT</a>
                                                                    </div>
                            </td>
                        </tr>
                                                    <tr>
                            <td>
                                <div class="approved">
                                                                        <img src="../verstka/images/approved.png" alt="Approved by investorz">
                                                                    </div>
                            </td>
                            <td>
                                <div class="broker-table">
                                    <a href="fidelis-capital-markets/index.html"><img src="../wp-content/uploads/2015/12/Fidelis-CM-logo-investorz-161x43.png" alt="Fidelis CM"></a>
                                </div>
                            </td>
                            <td>Cyprus</td>
                            <td>CySEC, IFSC</td>
                            <td>
                                <div class="number-table">
                                    <span>1</span>
                                    <a href="fidelis-capital-markets/index.html">
                                        <i class="icon icon-numberTable"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="readMore">
                                    <a href="fidelis-capital-markets/index.html">More info</a>
                                </div>
                            </td>
                            <td>
                                <div class="buttonTable">
                                                                        <a href="../../external.html?link=http://www.fcmforex.com/accounts/open-live-forex-trading-account.aspx?aid=investorz&amp;utm_source=investorz&amp;utm_medium=Banner&amp;utm_campaign=investorzLive" class="btn btn-account" target="_blank">LIVE ACCOUNT</a>
                                                                                                            <a href="../../external.html?link=http://www.fcmforex.com/accounts/open-demo-account.aspx?aid=investorz&amp;utm_source=investorz&amp;utm_medium=Banner&amp;utm_campaign=investorz" class="btn btn-demo" target="_blank">DEMO ACCOUNT</a>
                                                                    </div>
                            </td>
                        </tr>
                                                    <tr>
                            <td>
                                <div class="approved">
                                                                        <img src="../verstka/images/approved.png" alt="Approved by investorz">
                                                                    </div>
                            </td>
                            <td>
                                <div class="broker-table">
                                    <a href="sto/index.html"><img src="../wp-content/uploads/2015/12/STO-Logo-transparent.png" alt="STO"></a>
                                </div>
                            </td>
                            <td>Cyprus</td>
                            <td>FCA, CySEC</td>
                            <td>
                                <div class="number-table">
                                    <span>3</span>
                                    <a href="sto/index.html">
                                        <i class="icon icon-numberTable"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="readMore">
                                    <a href="sto/index.html">More info</a>
                                </div>
                            </td>
                            <td>
                                <div class="buttonTable">
                                                                        <a href="../../external.html?link=http://www.stofs.com/en/register/live/?utm_source=investorz&amp;utm_medium=landing-page&amp;utm_campaign=live-account&amp;camp=23538" class="btn btn-account" target="_blank">LIVE ACCOUNT</a>
                                                                                                            <a href="../../external.html?link=http://www.stofs.com/en/register/demo/?utm_source=investorz&amp;utm_medium=landing-page&amp;utm_campaign=demo-account&amp;camp=23538" class="btn btn-demo" target="_blank">DEMO ACCOUNT</a>
                                                                    </div>
                            </td>
                        </tr>
                                                    <tr>
                            <td>
                                <div class="approved">
                                                                        <img src="../verstka/images/approved.png" alt="Approved by investorz">
                                                                    </div>
                            </td>
                            <td>
                                <div class="broker-table">
                                    <a href="exness/index.html"><img src="../wp-content/uploads/2015/12/Exness-logo-transparent-72x43.png" alt="Exness"></a>
                                </div>
                            </td>
                            <td>Cyprus</td>
                            <td>CySEC</td>
                            <td>
                                <div class="number-table">
                                    <span>3</span>
                                    <a href="exness/index.html">
                                        <i class="icon icon-numberTable"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="readMore">
                                    <a href="exness/index.html">More info</a>
                                </div>
                            </td>
                            <td>
                                <div class="buttonTable">
                                                                        <a href="../../external.html?link=https://www.exness.com/register/?utm_source=investorz_en&amp;utm_medium=banner&amp;utm_campaign=button_live_may16_1x1&amp;id=a0st&amp;sz=1x1&amp;lg=en&amp;ws=for83&amp;t=s&amp;lp=May16" class="btn btn-account" target="_blank">LIVE ACCOUNT</a>
                                                                                                            <a href="../../external.html?link=https://www.exness.com/trial_account/?utm_source=investorz_en&amp;utm_medium=banner&amp;utm_campaign=button_demo_may16_2x2&amp;id=a0st&amp;sz=2x2&amp;lg=en&amp;ws=for83&amp;t=s&amp;lp=May16" class="btn btn-demo" target="_blank">DEMO ACCOUNT</a>
                                                                    </div>
                            </td>
                        </tr>
                                                    <tr>
                            <td>
                                <div class="approved">
                                                                        <img src="../verstka/images/approved.png" alt="Approved by investorz">
                                                                    </div>
                            </td>
                            <td>
                                <div class="broker-table">
                                    <a href="trade360/index.html"><img src="../wp-content/uploads/2015/11/trade360-logo-131x43.png" alt="Trade360"></a>
                                </div>
                            </td>
                            <td>Cyprus</td>
                            <td>CySEC</td>
                            <td>
                                <div class="number-table">
                                    <span>1</span>
                                    <a href="trade360/index.html">
                                        <i class="icon icon-numberTable"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="readMore">
                                    <a href="trade360/index.html">More info</a>
                                </div>
                            </td>
                            <td>
                                <div class="buttonTable">
                                                                        <a href="../../external.html?link=http://goaff.trade360.com/visit/?brand=trade360&amp;bta=45015" class="btn btn-account" target="_blank">LIVE ACCOUNT</a>
                                                                                                            <a href="../../external.html?link=http://goaff.trade360.com/visit/?brand=trade360&amp;bta=45015" class="btn btn-demo" target="_blank">DEMO ACCOUNT</a>
                                                                    </div>
                            </td>
                        </tr>
                                                    <tr>
                            <td>
                                <div class="approved">
                                                                    </div>
                            </td>
                            <td>
                                <div class="broker-table">
                                    <a href="fxgrow/index.html"><img src="../wp-content/uploads/2016/06/investorz_fxgrow_logo-123x43.png" alt="FxGrow"></a>
                                </div>
                            </td>
                            <td>Cyprus</td>
                            <td>CySEC</td>
                            <td>
                                <div class="number-table">
                                    <span>2</span>
                                    <a href="fxgrow/index.html">
                                        <i class="icon icon-numberTable"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="readMore">
                                    <a href="fxgrow/index.html">More info</a>
                                </div>
                            </td>
                            <td>
                                <div class="buttonTable">
                                                                        <a href="../../external.html?link=https://secure.fxgrow.com/b.php?cid=investorz%20Directory_LiveAccount&amp;l=aHR0cDovL2Z4Z3Jvdy5jb20vb3Blbi1hLWxpdmUtYWNjb3VudA%3D%3D" class="btn btn-account" target="_blank">LIVE ACCOUNT</a>
                                                                                                            <a href="../../external.html?link=https://secure.fxgrow.com/b.php?cid=investorz%20Directory_DemoAccount&amp;l=aHR0cDovL2Z4Z3Jvdy5jb20vb3Blbi1kZW1vLWFjY291bnQ%3D" class="btn btn-demo" target="_blank">DEMO ACCOUNT</a>
                                                                    </div>
                            </td>
                        </tr>
                                                    <tr>
                            <td>
                                <div class="approved">
                                                                    </div>
                            </td>
                            <td>
                                <div class="broker-table">
                                    <a href="icm-capital-limited/index.html"><img src="../wp-content/uploads/2016/06/ICM-Capital-logo-100x43.png" alt="ICM Capital Limited"></a>
                                </div>
                            </td>
                            <td>UK</td>
                            <td>FCA</td>
                            <td>
                                <div class="number-table">
                                    <span>3</span>
                                    <a href="icm-capital-limited/index.html">
                                        <i class="icon icon-numberTable"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="readMore">
                                    <a href="icm-capital-limited/index.html">More info</a>
                                </div>
                            </td>
                            <td>
                                <div class="buttonTable">
                                                                        <a href="../../external.html?link=https://access.icmcapital.co.uk/en/live?cmpnid=qz!tuvrnf4t!jl6dazfv1tqychrg" class="btn btn-account" target="_blank">LIVE ACCOUNT</a>
                                                                                                            <a href="../../external.html?link=https://access.icmcapital.co.uk/en/demo?cmpnid=qz!tuvrnf4t!jl6dazfv1tqychrg" class="btn btn-demo" target="_blank">DEMO ACCOUNT</a>
                                                                    </div>
                            </td>
                        </tr>
                                                    <tr>
                            <td>
                                <div class="approved">
                                                                    </div>
                            </td>
                            <td>
                                <div class="broker-table">
                                    <a href="plus500/index.html"><img src="../wp-content/uploads/2015/11/Plus500_logo-176x43.png" alt="Plus500"></a>
                                </div>
                            </td>
                            <td>UK</td>
                            <td>FCA,CySEC, ASIC</td>
                            <td>
                                <div class="number-table">
                                    <span>1</span>
                                    <a href="plus500/index.html">
                                        <i class="icon icon-numberTable"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="readMore">
                                    <a href="plus500/index.html">More info</a>
                                </div>
                            </td>
                            <td>
                                <div class="buttonTable">
                                                                        <a href="../../external.html?link=http://www.plus500.com/?id=97349&amp;pl=2" class="btn btn-account" target="_blank">LIVE ACCOUNT</a>
                                                                                                            <a href="../../external.html?link=http://www.plus500.com/?id=97349&amp;pl=2" class="btn btn-demo" target="_blank">DEMO ACCOUNT</a>
                                                                    </div>
                            </td>
                        </tr>
                                                    <tr>
                            <td>
                                <div class="approved">
                                                                    </div>
                            </td>
                            <td>
                                <div class="broker-table">
                                    <a href="triomarkets/index.html"><img src="../wp-content/uploads/2015/12/TrioMarkets-Logo-Transparant-investorz-341x65-226x43.png" alt="TrioMarkets"></a>
                                </div>
                            </td>
                            <td>Cyprus</td>
                            <td>CySEC</td>
                            <td>
                                <div class="number-table">
                                    <span>0</span>
                                    <a href="triomarkets/index.html">
                                        <i class="icon icon-numberTable"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="readMore">
                                    <a href="triomarkets/index.html">More info</a>
                                </div>
                            </td>
                            <td>
                                <div class="buttonTable">
                                                                                                        </div>
                            </td>
                        </tr>
                                                    <tr>
                            <td>
                                <div class="approved">
                                                                    </div>
                            </td>
                            <td>
                                <div class="broker-table">
                                    <a href="hy-markets/index.html"><img src="../wp-content/uploads/2015/10/HY-markets-logo-126x43.png" alt="HY Markets"></a>
                                </div>
                            </td>
                            <td>UK</td>
                            <td>FCA, DFSA</td>
                            <td>
                                <div class="number-table">
                                    <span>0</span>
                                    <a href="hy-markets/index.html">
                                        <i class="icon icon-numberTable"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="readMore">
                                    <a href="hy-markets/index.html">More info</a>
                                </div>
                            </td>
                            <td>
                                <div class="buttonTable">
                                                                                                        </div>
                            </td>
                        </tr>
                                                    <tr>
                            <td>
                                <div class="approved">
                                                                    </div>
                            </td>
                            <td>
                                <div class="broker-table">
                                    <a href="alpari/index.html"><img src="../wp-content/uploads/2015/11/Alpari_Logo-57x43.png" alt="Alpari"></a>
                                </div>
                            </td>
                            <td>St. Vincent and the Grenadines</td>
                            <td>FSA (St. Vincent and the Grenadines), FSC</td>
                            <td>
                                <div class="number-table">
                                    <span>0</span>
                                    <a href="alpari/index.html">
                                        <i class="icon icon-numberTable"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="readMore">
                                    <a href="alpari/index.html">More info</a>
                                </div>
                            </td>
                            <td>
                                <div class="buttonTable">
                                                                                                        </div>
                            </td>
                        </tr>
                                                    <tr>
                            <td>
                                <div class="approved">
                                                                    </div>
                            </td>
                            <td>
                                <div class="broker-table">
                                    <a href="acm-gold/index.html"><img src="../wp-content/uploads/2015/11/acm-gold-logo-80x43.jpg" alt="ACM Gold"></a>
                                </div>
                            </td>
                            <td>South Africa</td>
                            <td>FSP</td>
                            <td>
                                <div class="number-table">
                                    <span>0</span>
                                    <a href="acm-gold/index.html">
                                        <i class="icon icon-numberTable"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="readMore">
                                    <a href="acm-gold/index.html">More info</a>
                                </div>
                            </td>
                            <td>
                                <div class="buttonTable">
                                                                                                        </div>
                            </td>
                        </tr>
                                                    <tr>
                            <td>
                                <div class="approved">
                                                                    </div>
                            </td>
                            <td>
                                <div class="broker-table">
                                    <a href="etoro/index.html"><img src="../wp-content/uploads/2015/11/etoro-79x43.png" alt="eToro"></a>
                                </div>
                            </td>
                            <td>Cyprus</td>
                            <td>CySEC, FCA</td>
                            <td>
                                <div class="number-table">
                                    <span>0</span>
                                    <a href="etoro/index.html">
                                        <i class="icon icon-numberTable"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="readMore">
                                    <a href="etoro/index.html">More info</a>
                                </div>
                            </td>
                            <td>
                                <div class="buttonTable">
                                                                                                        </div>
                            </td>
                        </tr>
                                                    <tr>
                            <td>
                                <div class="approved">
                                                                    </div>
                            </td>
                            <td>
                                <div class="broker-table">
                                    <a href="avatrade/index.html"><img src="../wp-content/uploads/2015/11/Avatrade-logo-300x43.png" alt="AvaTrade"></a>
                                </div>
                            </td>
                            <td>Ireland</td>
                            <td> Central Bank of Ireland, ASIC, FSC BVI, FSA Japan, </td>
                            <td>
                                <div class="number-table">
                                    <span>0</span>
                                    <a href="avatrade/index.html">
                                        <i class="icon icon-numberTable"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="readMore">
                                    <a href="avatrade/index.html">More info</a>
                                </div>
                            </td>
                            <td>
                                <div class="buttonTable">
                                                                                                        </div>
                            </td>
                        </tr>
                                                    <tr>
                            <td>
                                <div class="approved">
                                                                    </div>
                            </td>
                            <td>
                                <div class="broker-table">
                                    <a href="octafx/index.html"><img src="../wp-content/uploads/2015/11/logo-132x43.png" alt="OctaFX"></a>
                                </div>
                            </td>
                            <td>St. Vincent and the Grenadines</td>
                            <td>FSA (St. Vincent and the Grenadines)</td>
                            <td>
                                <div class="number-table">
                                    <span>0</span>
                                    <a href="octafx/index.html">
                                        <i class="icon icon-numberTable"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="readMore">
                                    <a href="octafx/index.html">More info</a>
                                </div>
                            </td>
                            <td>
                                <div class="buttonTable">
                                                                                                        </div>
                            </td>
                        </tr>
                                                    <tr>
                            <td>
                                <div class="approved">
                                                                    </div>
                            </td>
                            <td>
                                <div class="broker-table">
                                    <a href="forextime/index.html"><img src="../wp-content/uploads/2015/11/forextime-logo-147x43.png" alt="ForexTime"></a>
                                </div>
                            </td>
                            <td>Cyprus</td>
                            <td>CySEC</td>
                            <td>
                                <div class="number-table">
                                    <span>0</span>
                                    <a href="forextime/index.html">
                                        <i class="icon icon-numberTable"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="readMore">
                                    <a href="forextime/index.html">More info</a>
                                </div>
                            </td>
                            <td>
                                <div class="buttonTable">
                                                                                                        </div>
                            </td>
                        </tr>
                                                    <tr>
                            <td>
                                <div class="approved">
                                                                    </div>
                            </td>
                            <td>
                                <div class="broker-table">
                                    <a href="fxpro/index.html"><img src="../wp-content/uploads/2015/11/FxPro_General_Logo-123x43.png" alt="FXPro"></a>
                                </div>
                            </td>
                            <td>UK</td>
                            <td>CySEC, FCA</td>
                            <td>
                                <div class="number-table">
                                    <span>0</span>
                                    <a href="fxpro/index.html">
                                        <i class="icon icon-numberTable"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="readMore">
                                    <a href="fxpro/index.html">More info</a>
                                </div>
                            </td>
                            <td>
                                <div class="buttonTable">
                                                                                                        </div>
                            </td>
                        </tr>
                                                    <tr>
                            <td>
                                <div class="approved">
                                                                    </div>
                            </td>
                            <td>
                                <div class="broker-table">
                                    <a href="admiral-markets/index.html"><img src="../wp-content/uploads/2015/11/Admiral-Markets-Logo-RGB2-116x43.png" alt="Admiral Markets"></a>
                                </div>
                            </td>
                            <td>UK</td>
                            <td>ASIC, CySEC, FCA</td>
                            <td>
                                <div class="number-table">
                                    <span>0</span>
                                    <a href="admiral-markets/index.html">
                                        <i class="icon icon-numberTable"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="readMore">
                                    <a href="admiral-markets/index.html">More info</a>
                                </div>
                            </td>
                            <td>
                                <div class="buttonTable">
                                                                                                        </div>
                            </td>
                        </tr>
                                                    <tr>
                            <td>
                                <div class="approved">
                                                                    </div>
                            </td>
                            <td>
                                <div class="broker-table">
                                    <a href="xm/index.html"><img src="../wp-content/uploads/2015/11/xm_logo_big-124x43.png" alt="XM"></a>
                                </div>
                            </td>
                            <td>Cyprus</td>
                            <td>CySEC</td>
                            <td>
                                <div class="number-table">
                                    <span>0</span>
                                    <a href="xm/index.html">
                                        <i class="icon icon-numberTable"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="readMore">
                                    <a href="xm/index.html">More info</a>
                                </div>
                            </td>
                            <td>
                                <div class="buttonTable">
                                                                                                        </div>
                            </td>
                        </tr>
                                                    <tr>
                            <td>
                                <div class="approved">
                                                                    </div>
                            </td>
                            <td>
                                <div class="broker-table">
                                    <a href="fxprimus/index.html"><img src="../wp-content/uploads/2015/11/FxPrimus_logo-108x43.png" alt="FXPRIMUS"></a>
                                </div>
                            </td>
                            <td>Cyprus</td>
                            <td>CySEC</td>
                            <td>
                                <div class="number-table">
                                    <span>0</span>
                                    <a href="fxprimus/index.html">
                                        <i class="icon icon-numberTable"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="readMore">
                                    <a href="fxprimus/index.html">More info</a>
                                </div>
                            </td>
                            <td>
                                <div class="buttonTable">
                                                                                                        </div>
                            </td>
                        </tr>
                                                    <tr>
                            <td>
                                <div class="approved">
                                                                    </div>
                            </td>
                            <td>
                                <div class="broker-table">
                                    <a href="ironfx/index.html"><img src="../wp-content/uploads/2015/11/IronFX-Global-Logo-79x43.jpg" alt="IronFX"></a>
                                </div>
                            </td>
                            <td>Cyprus</td>
                            <td>CySEC, FCA, ASIC</td>
                            <td>
                                <div class="number-table">
                                    <span>0</span>
                                    <a href="ironfx/index.html">
                                        <i class="icon icon-numberTable"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="readMore">
                                    <a href="ironfx/index.html">More info</a>
                                </div>
                            </td>
                            <td>
                                <div class="buttonTable">
                                                                                                        </div>
                            </td>
                        </tr>
                                                    <tr>
                            <td>
                                <div class="approved">
                                                                    </div>
                            </td>
                            <td>
                                <div class="broker-table">
                                    <a href="acfx/index.html"><img src="../wp-content/uploads/2015/11/ACFX-logo-114x43.jpg" alt="ACFX (license suspended)"></a>
                                </div>
                            </td>
                            <td>Cyprus</td>
                            <td>Suspended</td>
                            <td>
                                <div class="number-table">
                                    <span>0</span>
                                    <a href="acfx/index.html">
                                        <i class="icon icon-numberTable"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="readMore">
                                    <a href="acfx/index.html">More info</a>
                                </div>
                            </td>
                            <td>
                                <div class="buttonTable">
                                                                                                        </div>
                            </td>
                        </tr>
                                                </tbody>
                    </table>
                </div>
                            </div>
        </div>

        
    </div>
</div>
<?php get_footer(); ?>