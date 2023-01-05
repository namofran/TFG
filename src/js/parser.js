// Data classes
/* eslint-disable no-var, semi, camelcase, no-unused-vars, no-trailing-spaces */
class IFrame {
  temperature = NaN;
  humidity = NaN;
  pressure = NaN;
  uv_index = NaN;
  battery = NaN;
  time = NaN;
  constructor () {} // eslint-disable-line no-useless-constructor
}

class Frame_v1 extends IFrame {
  temperature = NaN;
  humidity = NaN;
  pressure = NaN;
  uv_index = NaN;
  battery = NaN
  time = NaN;
  // node_id = NaN;
  constructor () { // eslint-disable-line no-useless-constructor
    super();
  }
}

//
// Parser classes.
// For new parsers, extend from IParser
//
class IParser {
  parser (str) {
    throw new Error('Abstract Method has no implementation');
  }
}

class Parser_v1 extends IParser {
  parser (str) {
    var frames = []; 
    for (var i = 0; i < str.length; i++) {
      var DatosJSON = str[i].field4;
      var DateJSON = str[i].created_at;
      this.frame = new Frame_v1()
      this.frame.temperature = parseInt(DatosJSON.substring(0, 4)) / 100;
      this.frame.humidity = parseInt(DatosJSON.substring(4, 6));
      this.frame.pressure = parseInt(DatosJSON.substring(6, 10)); // en milibares o hectopascales 1atm=1013.25mb
      this.frame.uv_index = parseInt(DatosJSON.substring(10, 12));
      this.frame.battery = parseInt(DatosJSON.substring(22, 24));
      this.frame.time = ParserTime(DateJSON);
      frames.push(this.frame);
    }
    // console.log("esto es frames array filter temperature: ", frames);
    return frames;
  }
}

function ParserTime (DateJSON) {
  const raw_date = new Date(DateJSON);
  const parsed_date = raw_date.toLocaleString('es-ES', { timeStyle: 'short', hour12: false, timeZone: 'Europe/Madrid' });
  return parsed_date;
}

function parser_last (str) {
  var DatosJSON = str.field4;
  var DateJSON = str.created_at; // eslint-disable-line no-unused-vars
  var frames = [];
  const temperature = parseInt(DatosJSON.substring(0, 4)) / 100;
  const humidity = parseInt(DatosJSON.substring(4, 6));
  const pressure = parseInt(DatosJSON.substring(6, 10)); // en milibares o hectopascales 1atm=1013.25mb
  const uv_index = parseInt(DatosJSON.substring(10, 12));
  // const battery = parseInt(DatosJSON.substring(22, 24));
  // const time = ParserTime(DateJSON);
  frames.push(temperature);
  frames.push(humidity);
  frames.push(uv_index);
  frames.push(pressure);
  return frames;
}

// node.js export. Needed for unit testing
module.exports = { IFrame, Frame_v1, IParser, Parser_v1 };
