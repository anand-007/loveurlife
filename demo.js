var examples = {};

examples['locations'] = function() {
  /* defining locations to display.
     Each position must have a key, an alpha and delta position (or x and y if you want to display a static location).
     Any additional key can be reached via callbacks functions.
  */
  var locations = {
    obj1: {
      alpha: Math.PI / 4,
      delta: 0,
      name: 'Africa'
    },
    obj2: {
      alpha: 1 * Math.PI / 4,
      delta: -2 * Math.PI / 4,
      name: 'North America'
    },
    obj3: {
      alpha: 2 * Math.PI / 4,
      delta: 0,
      name: 'South America'
    },
    obj4: {
      alpha: 3 * Math.PI / 4,
      delta: 3 * Math.PI / 4,
      name: 'Asia'
    },
    obj5: {
      alpha: 2.2 * Math.PI / 4,
      delta: -1.1 * Math.PI / 4,
      name: 'New Zealand'
    }
  };
  $('#sphere').earth3d({
    locationsElement: $('#locations'),
    dragElement: $('#locations'), // where do we catch the mouse drag
    locations: locations
  });
};

examples['flights'] = function() {
  /* defining locations to display.
     Each position must have a key, an alpha and delta position (or x and y if you want to display a static location).
     Any additional key can be reached via callbacks functions.
  */
  var locations = {
    obj1: {
      alpha: Math.PI / 4,
      delta: 0,
      name: 'Africa'
    },
    obj2: {
      alpha: 1 * Math.PI / 4,
      delta: -2 * Math.PI / 4,
      name: 'North America'
    },
    obj3: {
      alpha: 2 * Math.PI / 4,
      delta: 0,
      name: 'South America'
    },
    obj4: {
      alpha: 3 * Math.PI / 4,
      delta: 3 * Math.PI / 4,
      name: 'Asia'
    },
    obj5: {
      alpha: 2.2 * Math.PI / 4,
      delta: -1.1 * Math.PI / 4,
      name: 'New Zealand'
    }
  };
  /* defining paths to display.
     Each path must have a key, an origin and a destination. The values are the location's key.
     You can, if you want to, define flights on these paths.
     Each flight has a key, a destination (the location's key) and a position.
     The position is the progress a fleet has made on its path.
     Any additional key can be reach via callbacks functions.
   */
  var paths = {
    
  }

  $('#sphere').earth3d({
    flightsCanvas: $('#flights'),
    locationsElement: $('#locations'),
    dragElement: $('#locations'), // where do we catch the mouse drag
    paths: paths,
    locations: locations
  });
};

function selectExample(example) {
  $('#sphere').earth3d('destroy');
  $('#sphere').replaceWith($('<canvas id="sphere" width="400" height="400"></canvas>'));
  $('.location').remove();
  $('.flight').remove();
  $('#flights')[0].getContext('2d').clearRect(0, 0, 400, 400);

  var code = examples[example].toString();
  code = code.substring(14);
  code = code.substring(0, code.length - 2);
  var lines = code.split("\n");
  for (var i = 0; i < lines.length; i++) {
    lines[i] = lines[i].substring(2);
  }
  code = lines.join("\n");
  $('#example_code').val(code);

  examples[example]();
}


$(document).ready(function() {
  selectExample('flights');

  $('#example').change(function() {
    selectExample($(this).val());
  });
});

function addPath() {
  $('#sphere').earth3d('changePaths', {path2: {
    origin: 'obj1',
    destination: 'obj3'
  }});
}
