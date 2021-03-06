// Matter.js - http://brm.io/matter-js/

// Matter module aliases
var Engine = Matter.Engine,
    World = Matter.World,
    Body = Matter.Body,
    Bodies = Matter.Bodies,
    Common = Matter.Common,
    Composites = Matter.Composites,
    MouseConstraint = Matter.MouseConstraint;

// create a Matter.js engine
var engine = Engine.create(document.body, {
  render: {
    options: {
      showAngleIndicator: false,
	  showVelocity: true,
      wireframes: false,
		Collisions : true
	}
	
  }
});



// add a mouse controlled constraint
var mouseConstraint = MouseConstraint.create(engine);
World.add(engine.world, mouseConstraint);

// create a load of circle bodies
var stack = Composites.stack(2, 2, 1, 1, 0, 0, function(x, y, column, row) {
  return Bodies.circle(x, y, Common.random(30, 40), { friction: 0.0000001, restitution: 0.5, density: 0.2 });
}
);

// add circle bodies to the world
World.add(engine.world, stack);

// add some ramps to the world for the bodies to roll down
World.add(engine.world, [
Bodies.rectangle(200, 150, 500, 10, { isStatic: true, angle: Math.PI * 5.1}),
Bodies.rectangle(600, 150, 500, 10, { isStatic: true, angle: -Math.PI * 10.1 })
]);

// add some some walls to the world
var offset = 5;
World.add(engine.world, [
  Bodies.rectangle(400, -offset, 800 + 2 * offset, 50, { isStatic: true }),
  Bodies.rectangle(400, 300 + offset, 800 + 2 * offset, 50, { isStatic: true }),
  Bodies.rectangle(800 + offset, 100, 50, 600 + 2 * offset, { isStatic: true }),
  Bodies.rectangle(-offset, 100, 50, 600 + 2 * offset, { isStatic: true })
]);
  
// run the engine
Engine.run(engine);