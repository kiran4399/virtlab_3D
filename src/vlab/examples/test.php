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

    <section id="wizard">
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




                <div class="tab-content">

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
    <div>
        <input type="text" name="field_name[]" value=""/>
        <a href="javascript:void(0);" class="add_button" title="Add field"><img src="plus.png"/></a>
    </div>
</div>
                              </div>

<input type="submit" class="button" name="insert" value="insert" />

                    </div>
</form>

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
    <div>
        <input type="text" name="field_name[]" value=""/>
        <a href="javascript:void(0);" class="add_button" title="Add field"><img src="plus.png"/></a>
    </div>
</div>
                              </div>

<input type="submit" class="button" name="insert" value="insert" />

                    </div>

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
    <div>
        <input type="text" name="field_name[]" value=""/>
        <a href="javascript:void(0);" class="add_button" title="Add field"><img src="plus.png"/></a>
    </div>
</div>
                              </div>

<input type="submit" class="button" name="insert" value="insert" />

                    </div>
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
<script src="_site/js/vendor/jquery-2.1.3.min.js"></script>
<script src="_site/js/app.js"></script>
<script src="_site/js/pixi.js"></script>
<script id="example-script"></script>
<script>
var renderer = PIXI.autoDetectRenderer(700, 500);
document.body.appendChild(renderer.view);

// create the root of the scene graph
var stage = new PIXI.Container();

// create a background...
var background = PIXI.Sprite.fromImage('_assets/button_test_BG.jpg');
background.width = renderer.width;
background.height = renderer.height;

// add background to stage...
stage.addChild(background);

// create some textures from an image path
var textureButton = PIXI.Texture.fromImage('_assets/button.png');
var textureButtonDown = PIXI.Texture.fromImage('_assets/buttonDown.png');
var textureButtonOver = PIXI.Texture.fromImage('_assets/buttonOver.png');

var buttons = [];

var buttonPositions = [
    175, 75,
    655, 75,
    410, 325,
    150, 465,
    685, 445
];

var noop = function () {
	console.log('click');
};

for (var i = 0; i < 5; i++)
{
    var button = new PIXI.Sprite(textureButton);
    button.buttonMode = true;

    button.anchor.set(0.5);

    button.position.x = buttonPositions[i*2];
    button.position.y = buttonPositions[i*2 + 1];

    // make the button interactive...
    button.interactive = true;
	
	

    button
        // set the mousedown and touchstart callback...
        .on('mousedown', onButtonDown)
        .on('touchstart', onButtonDown)

        // set the mouseup and touchend callback...
        .on('mouseup', onButtonUp)
        .on('touchend', onButtonUp)
        .on('mouseupoutside', onButtonUp)
        .on('touchendoutside', onButtonUp)

        // set the mouseover callback...
        .on('mouseover', onButtonOver)

        // set the mouseout callback...
        .on('mouseout', onButtonOut)


        // you can also listen to click and tap events :
        //.on('click', noop)
        
	button.tap = noop;
	button.click = noop;
    // add it to the stage
    stage.addChild(button);

    // add button to array
    buttons.push(button);
}

// set some silly values...
buttons[0].scale.set(1.2);

buttons[2].rotation = Math.PI / 10;

buttons[3].scale.set(0.8);

buttons[4].scale.set(0.8,1.2);
buttons[4].rotation = Math.PI;


animate();

function animate() {
    // render the stage
    renderer.render(stage);

    requestAnimationFrame(animate);
}

function onButtonDown()
{
    this.isdown = true;
    this.texture = textureButtonDown;
    this.alpha = 1;
}

function onButtonUp()
{
    this.isdown = false;

    if (this.isOver)
    {
        this.texture = textureButtonOver;
    }
    else
    {
        this.texture = textureButton;
    }
}

function onButtonOver()
{
    this.isOver = true;

    if (this.isdown)
    {
        return;
    }

    this.texture = textureButtonOver;
}

function onButtonOut()
{
    this.isOver = false;

    if (this.isdown)
    {
        return;
    }

    this.texture = textureButton;
}
</script>
    <div>
        <input type="text" name="field_name[]" value=""/>
        <a href="javascript:void(0);" class="add_button" title="Add field"><img src="plus.png"/></a>
    </div>
</div>
                              </div>

<input type="submit" class="button" name="insert" value="insert" />

                    </div>
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
    <div>
        <input type="text" name="field_name[]" value=""/>
        <a href="javascript:void(0);" class="add_button" title="Add field"><img src="plus.png"/></a>
    </div>
</div>
                              </div>

<input type="submit" class="button" name="insert" value="insert" />

                    </div>
</div>
                <ul class="pager wizard">
                    <li class="previous first" style="display:none;"><a href="#">First</a></li>
                    <li class="previous"><a href="#">Previous</a></li>
                    <li class="next last" style="display:none;"><a href="#">Last</a></li>
                    <li class="next"><a href="#">Next</a></li>
                    <li class="finish"><a href=**>Finish</a></li>
                </ul>
            </div>
        </div>
        <div class="col-xs-12">
            <input type='text' name='stepid' id='stepid' value='1' size='2' style='width:20px;' />
            <input type='button' class='btn' id='disable-step' value=disable />
            <input type='button' class='btn' id='enable-step' value='enable' />
            <input type='button' class='btn' id='enable-step' value='add' />
            <input type='button' class='btn' id='remove-step' value='remove' />
        </div>
    </form>


</section>
</div>

<!--*****************************************************************************************************************************************-->
<!--*****************************************************************************************************************************************-->
<!--*****************************************************************************************************************************************-->



<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jquery-ui-1.8.custom.min.js"></script>

<script type="text/javascript" src="drag_drop.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="add_field.js"></script>

<!--***********Script for the wizard options and the animations. Consists of the functions declared in the above html body****************-->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../jquery.bootstrap.wizard.js"></script>
<script src="../prettify.js"></script>
	<script>
	$(document).ready(function() {
	  	$('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
			var $total = navigation.find('li').length;
			var $current = index+1;
			var $percent = ($current/$total) * 100;
			$('#rootwizard .progress-bar').css({width:$percent+'%'});
		}});
		window.prettyPrint && prettyPrint()
	});
	</script>

</body>
</html>
