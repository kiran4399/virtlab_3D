        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8">
        <title>Virutal_lab</title>
        <!-- Bootstrap -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../prettify.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="devheart-examples.css" media="screen" />
        </head>


        <body>
        <div class='container'>

                <div class="page-header">

                   <h1>3D Physics virtual lab </h1>
            <h5> You can design your experiments. Input the given details and generate your lab</h2>
                </div>
                    <div id="rootwizard">
                        <ul>
        <li><a href='#tab1' data-toggle='tab'>Finding out g</a></li><li><a href='#tab2' data-toggle='tab'>Tension in pulley</a></li><li><a href='#tab3' data-toggle='tab'>ATwood machine</a></li><li><a href='#tab4' data-toggle='tab'>Moving wedge</a></li><li><a href='#tab5' data-toggle='tab'>Free fall</a></li>

        </ul>
                        <div id="bar" class="progress progress-info progress-striped">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                        </div>

        <div class="row">
        <!--<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">-->
        <div class="col-sm-3 col-md-3 col-lg-3">

        <form action= "process.php" method="post" >
        <div class="tab-pane" id="tab1">
                                      <div class="control-group">
                                            <label class="control-label" for="step">step</label>
                                        <div class="controls">
                                          <input type="text" id="namefield" name="stepfield" class="required">
                                        </div>
                                      </div>
                           <div class="control-group">
                                        <label class="control-label" for="desc">description</label>
                                        <div class="controls">
                                          <input type="text" id="namefield" name="descfield" class="required">
                                        </div>
                                      </div>

                                      <div class="control-group">
                                        <label class="control-label" for="actions">actions</label>
                                        <div class="controls">
                                          <input type="text" id="namefield" name="actionfield" class="required">
                                        </div>
                                      </div>

                                      <div class="control-group">
                                        <label class="control-label" for="outcomes">outcomes</label>
                                        <div class="controls">
                                          <input type="text" id="namefield" name="outcomefield" class="required">
                                        </div>
                                      </div>

                                               <div class="control-group">
                                                <label class="control-label" for="constraints">constraints</label>
                                               <div class="field_wrapper">

                <input type="text" name="field_name[]" value=""/>
                    <a href="javascript:void(0);" class="add_button" title="Add field"><img src="plus.png"/></a>
        </div>
                                      </div>

<br>
        <input type="submit" class="button" name="insert" value="insert" />

                            </div>
        </form>

        </div>

<div class="col-sm-3 col-md-3 col-lg-3">
<h4> Apparatus </h4>
<button type="button">Wedge</button> Click to get a wedge<br><br>
<button type="button">Block</button>Click to get a wedge<br><br>
<button type="button">Pulley</button>Click to get a wedge<br><br>
<button type="button">Thread</button>Click to get a wedge<br><br>
<button type="button">Base</button>Click to get a wedge<br><br>
</div>
        <div class="col-sm-6 col-lg-6 col-md-6">
        <script src="_site/js/vendor/jquery-2.1.3.min.js"></script>
        <script src="_site/js/app.js"></script>
        <script src="_site/js/pixi.js"></script>
        <script id="example-script"></script>
        <!--<script src="animation.js"></script> -->
        Hello world this is my right side!!
        <canvas height="200" width="100" style="cursor: inherit;"></canvas>
        </div>


                    </div>
                    </div>

<br>
<div class = "row">
<div class = "col-sm-6 col-lg-6 col-md-6">
<br>
                    <input type='text' name='stepid' id='stepid' value='1' size='2' style='width:20px;' />
                    <input type='button' class='btn' id='disable-step' value=disable />
                    <input type='button' class='btn' id='enable-step' value='enable' />
                    <input type='button' class='btn' id='enable-step' value='add' />
                    <input type='button' class='btn' id='remove-step' value='remove' />
                </div>

<div class = "col-sm-6 col-lg-6 col-md-6">
                 <ul class="pager wizard">
                            <li class="previous first" style="display:none;"><a href="#">First</a></li>
                            <li class="previous"><a href="#">Previous</a></li>
                            <li class="next last" style="display:none;"><a href="#">Last</a></li>
                            <li class="next"><a href="#">Next</a></li>
                            <li class="finish"><a href=**>Finish</a></li>
                        </ul>
        </div>
        </div>
        </div>
        <!--*****************************************************************************************************************************************-->
        <!--*****************************************************************************************************************************************-->
        <!--*****************************************************************************************************************************************-->



        <script type="text/javascript" src="jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="jquery-ui-1.8.custom.min.js"></script>

        <script type="text/javascript" src="drag_drop.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script type="text/javascript" src="add_field.js"></script>

        <!--***********Script for the wizard options and the animations. Consists of the functions declared in the above html body****************-->
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="jquery.bootstrap.wizard.js"></script>
        <script src="prettify.js"></script>
        <script src="wizard.js"></script>


        </body>
        </html>
