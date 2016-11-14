<?php /* Template Name: Fibonacci Calculator */ ?>


<?php get_header(); ?>
<div class="container">


<div class="main padding-main">
    <div class="container reletBlock">
        <div class="skyscraper-block left">
            <div id="execphp-16" class="widget widget_execphp">			<div class="execphpwidget"></div>
		</div>        </div>
        <div class="skyscraper-block right">
            <div id="execphp-17" class="widget widget_execphp">			<div class="execphpwidget"></div>
		</div>        </div>
        <div class="row">
            <div class="col-sm-2">

                

<div class="tools">
    <div class="tools-button">
        <a href="#" class="btn btn-tools"><div class="icon-sprite icon-three-bar"></div>Tools</a>
    </div>
    <div class="tools-menu-wrap">
        <div class="tools-menu">
            <ul>

                
                    
                    <li>
                        <a href="http://atozforex.com/trading-tools/forex-signals/" title="Free Forex Signals">
                            <i class="icon icon-sprite icon-tool-signal"></i>
                        </a>
                    </li>

                
                    
                    <li>
                        <a href="http://atozforex.com/trading-tools/forex-indicators/" title="Indicators">
                            <i class="icon icon-sprite icon-tools-indicators"></i>
                        </a>
                    </li>

                
                    
                    <li class="active">
                        <a href="http://atozforex.com/trading-tools/fibonacci-calculator/" title="Fibonacci Calculator">
                            <i class="icon icon-sprite icon-tools-calc"></i>
                        </a>
                    </li>

                
                    
                    <li>
                        <a href="http://atozforex.com/trading-tools/pivot-calculator/" title="Pivot Point Calculator">
                            <i class="icon icon-sprite icon-tools-calc"></i>
                        </a>
                    </li>

                
                    
                    <li>
                        <a href="http://atozforex.com/trading-tools/pip-calculator/" title="Pip calculator">
                            <i class="icon icon-sprite icon-tools-calc"></i>
                        </a>
                    </li>

                
            </ul>
        </div>
    </div>
</div>


            </div>
            <div class="col-md-10 col-sm-10 col-xs-12 calculator-field">

            <div class="calculator-head">
<h2 class="subheading"><a href="#">Fibonacci Calculator</a></h2>
<div class="heading-text">
<p>investorz <a href="#">Fibonacci calculator</a> enables traders&nbsp;generating <a href="http://atozforex.com/forex-glossary/fibonacci-retracements/" target="_blank">Fibonacci retracements</a> and extension levels for uptrend and downtrend markets.</p>
<p>Enter high and low values for the trend direction and press calculate.</p>
<p>This Visual Fibonacci Trading tool will generate the world famous Fibonacci retracement and extension levels which act as support and resistance levels.</p>
</div>
</div>
    <form method="POST" id="calculator-form">
        <div id="fibonacci-container">
            <div class="bg bg-left">
                <div class="side left top" data-formula="HMD">
                    <div class="uptrend_icon_container">
                        <div class="uptrend_icon"></div>
                        <div class="uptrend_text">UPTREND</div>
                    </div>
                    <div class="inner-content">
                        <div id="inner-content-left-container-uptrend-extension">
                            <input type="text" class="calc-input1" id="input-uptrend-high" data-id="uptrend">
                        </div>
                        <div id="inner-content-right-container-uptrend-extension">
                            <h3>Extension</h3>

                            <div class="field uptrend">
                                <input type="text" name="e-high-01" id="e-high-01" data-number="1" class="target" disabled="">
                            </div>
                            <div class="field uptrend">
                                <input type="text" name="e-high-02" id="e-high-02" data-number="0.618" class="target" disabled="">
                            </div>
                            <div class="field uptrend">
                                <input type="text" name="e-high-03" id="e-high-03" data-number="0.5" class="target" disabled="">
                            </div>
                            <div class="field uptrend">
                                <input type="text" name="e-high-04" id="e-high-04" data-number="0.382" class="target" disabled="">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="side left bottom" data-formula="LPD">

                    <div class="inner-content">

                        <div id="inner-content-left-container-uptrend-extension">
                            <input type="text" class="calc-input2" id="input-uptrend-low" data-id="uptrend">
                        </div>

                        <div id="inner-content-right-container-uptrend-extension">
                            <h3>Retracement</h3>

                            <div class="field uptrend">
                                <input type="text" name="r-low-01" id="r-low-01" class="target" data-number="0.618" disabled="">
                            </div>
                            <div class="field uptrend">
                                <input type="text" name="r-low-02" id="r-low-02" class="target" data-number="0.5" disabled="">
                            </div>
                            <div class="field uptrend">
                                <input type="text" name="r-low-03" id="r-low-03" class="target" data-number="0.382" disabled="">
                            </div>
                            <div class="field uptrend">
                                <input type="text" name="r-low-04" id="r-low-04" class="target" data-number="0.236" disabled="">
                            </div>
                        </div>
                        <!--<div class="label uptrend">Uptrend</div>-->
                    </div>
                </div>
            </div>

            <div class="bg bg-right">

                <div class="side right top" data-formula="LPD">

                    <div class="inner-content">
                        <div class="downtrend_icon_container">
                            <div class="downtrend_icon"></div>
                            <div class="downtrend_text">DOWNTREND</div>
                        </div>
                        <div id="inner-content-left-container-uptrend-extension">
                            <input type="text" class="calc-input3" id="input-downtrend-high" data-id="downtrend">
                        </div>

                        <div id="inner-content-right-container-uptrend-extension">
                            <h3>Retracement</h3>

                            <div class="field downtrend">
                                <input type="text" name="r-high-01" id="r-high-01" class="target" data-number="0.236" disabled="">
                            </div>
                            <div class="field downtrend">
                                <input type="text" name="r-high-02" id="r-high-02" class="target" data-number="0.382" disabled="">
                            </div>
                            <div class="field downtrend">
                                <input type="text" name="r-high-03" id="r-high-03" class="target" data-number="0.5" disabled="">
                            </div>
                            <div class="field downtrend">
                                <input type="text" name="r-high-04" id="r-high-04" class="target" data-number="0.618" disabled="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="side right bottom" data-formula="LMD">

                    <div class="inner-content">

                        <div id="inner-content-left-container-uptrend-extension">
                            <input type="text" class="calc-input4" id="input-downtrend-low" data-id="downtrend">
                        </div>

                        <div id="inner-content-right-container-uptrend-extension">
                            <h3>Extension</h3>

                            <div class="field downtrend">
                                <input type="text" name="e-low-01" id="e-low-01" class="target" data-number="0.382" disabled="">
                            </div>
                            <div class="field downtrend">
                                <input type="text" name="e-low-02" id="e-low-02" class="target" data-number="0.5" disabled="">
                            </div>
                            <div class="field downtrend">
                                <input type="text" name="e-low-03" id="e-low-03" class="target" data-number="0.618" disabled="">
                            </div>
                            <div class="field downtrend">
                                <input type="text" name="e-low-04" id="e-low-04" class="target" data-number="1" disabled="">
                            </div>
                        </div>

                        <!--<div class="label downtrend">Downtrend</div>-->
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="fibonacci_buttons_container">
                <div>
                    <a href="#" id="fibonacci-reset" class="btn btn-orang btn-lg">Reset</a>
                </div>
                <div>
                    <a href="#" id="fibonacci-calculate" class="btn btn-success btn-lg">Calculate</a>
                </div>
                <div>
                    <a href="http://www.plus500.com/?id=97349&amp;pl=2" target="_blank" class="btn btn-danger btn-lg">Trade Now</a>
                </div>
            </div>
        </div>

    </form>
    

            </div>
        </div>
    </div>
</div>


</div>
<?php get_footer(); ?>

