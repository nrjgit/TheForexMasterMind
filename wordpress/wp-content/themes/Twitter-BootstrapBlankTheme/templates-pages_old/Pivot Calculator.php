<?php /* Template Name: Pivot Calculator */ ?>


<?php get_header(); ?>

<style type="text/css">

#calculator-form .left li.even {
    background: gainsboro;
}

.column.right>ul:nth-child(3) {
    background: gainsboro;
}

#calculator-form .left li.even {
    background: gainsboro;
}


</style>
<div class="container">
<div class="main padding-main">
    <div class="container reletBlock">
        <div class="skyscraper-block left">
            <div id="execphp-24" class="widget widget_execphp">			<div class="execphpwidget"></div>
		</div>        </div>
        <div class="skyscraper-block right">
            <div id="execphp-13" class="widget widget_execphp">			<div class="execphpwidget"></div>
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

                
                    
                    <li>
                        <a href="http://atozforex.com/trading-tools/fibonacci-calculator/" title="Fibonacci Calculator">
                            <i class="icon icon-sprite icon-tools-calc"></i>
                        </a>
                    </li>

                
                    
                    <li class="active">
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
<h2 class="subheading">Pivot Point Calculator</h2>
<div class="heading-text">
<p>investorz Pivot Point calculator enables site users generating pivot points in Classic, Fibonacci, Camarilla and Demark systems.</p>
<p>Select the calculation system and then fill the previous day’s or month’s <strong>open, high, low and close</strong> levels and the rest will be calculated automatically.</p>
<p>These levels are useful for traders to find <strong><a href="http://www.AtoZForex.com/forex-glossary/support-levels/" target="_blank">support </a></strong>and<strong> <a href="http://www.atozforex.com/forex-glossary/resistance/" target="_blank">resistance</a></strong> levels which can help you to determine your entry and exit points.</p>
</div>
</div>

    <form method="POST" id="calculator-form">
        <div class="column left">
            <ul>
                <li class="odd">
                    <label for="pivot-high">High</label>
                    <input type="text" name="pivot-high" id="pivot-high" value="">
                </li>
                <li class="even">
                    <label for="pivot-low">Low</label>
                    <input type="text" name="pivot-low" id="pivot-low" value="">
                </li>
                <li class="odd">
                    <label for="pivot-close">Close</label>
                    <input type="text" name="pivot-close" id="pivot-close" value="">
                </li>
                <li class="even">
                    <label for="pivot-open">Open</label>
                    <input type="text" name="pivot-open" id="pivot-open" value="">
                </li>
            </ul>
            <div id="formula-select" class="zNice">
                <label for="calculator_formula">Formula</label>
                <span class="zNice-wrap zNice-select"><span class="zNice-bg"></span><select name="calculator_formula" id="calculator_formula">
                    <option value="classic">Classic</option>
                    <option value="fibonacci">Fibonacci</option>
                    <option value="camarilla">Camarilla</option>
                    <option value="demark">Demark</option>
                </select><span class="zNice-select-text"><span class="zNice-select-item">Classic</span></span><span class="zNice-select-open"></span><ul class="zNice-select-list"><li class="zNice-selected"><span class="zNice-select-item">Classic</span></li><li><span class="zNice-select-item">Fibonacci</span></li><li><span class="zNice-select-item">Camarilla</span></li><li><span class="zNice-select-item">Demark</span></li></ul></span>
            </div>
            <div id="pivot-calculate-container">
                <a href="#" class="btn btn-lg btn-primary" id="pivot-reset">Reset</a>
                <a href="#" class="btn btn-lg btn-success" id="pivot-calculate">Calculate</a>
            </div>
        </div>
        <div class="column right">
            <ul>
                <li>
                    <label for="pivot-r3">R3</label>
                    <input type="text" name="pivot-r3" id="pivot-r3" value="" disabled="">
                </li>
                <li>
                    <label for="pivot-r2">R2</label>
                    <input type="text" name="pivot-r2" id="pivot-r2" value="" disabled="">
                </li>
                <li>
                    <label for="pivot-r1">R1</label>
                    <input type="text" name="pivot-r1" id="pivot-r1" value="" disabled="">
                </li>
            </ul>
            <ul>
                <li>
                    <label for="pivot-pivot">Pivot</label>
                    <input type="text" name="pivot-pivot" id="pivot-pivot" value="" disabled="">
                </li>
            </ul>
            <ul>
                <li>
                    <label for="pivot-s1">S1</label>
                    <input type="text" name="pivot-s1" id="pivot-s1" value="" disabled="">
                </li>
                <li>
                    <label for="pivot-s2">S2</label>
                    <input type="text" name="pivot-s2" id="pivot-s2" value="" disabled="">
                </li>
                <li>
                    <label for="pivot-s3">S3</label>
                    <input type="text" name="pivot-s3" id="pivot-s3" value="" disabled="">
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </form>

    <div class="horizontalBaner">
        <div id="execphp-14" class="widget widget_execphp">			<div class="execphpwidget"></div>
		</div>    </div>

    

            </div>
        </div>
    </div>
</div>

</div>
<?php get_footer(); ?>

