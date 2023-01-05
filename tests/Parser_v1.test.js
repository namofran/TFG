const parser = require('../src/js/parser.js'); // import the DUT file here

describe('Parser', () => {
  // First test. Normal work: we use a real frame in order to test the parsering
  test('Parser straightforward', () => {
    const parser_v1 = new parser.Parser_v1();
    const input = [];
	input.push({created_at: '2022-11-23T16:20:27Z', entry_id: 2, field4: '226781101802380013320016'});
    console.log(parser_v1.parser(input));
    expect(parser_v1.parser(input)).toEqual([{ temperature: 22.67, time: "17:20", humidity: 81, uv_index: 2, pressure: 1018, battery: 16 }]);
  });

  test('Parser null', () => {
	  console.log(parser);
    const parser_v1 = new parser.Parser_v1();
    const input = [];
	input.push({created_at: '', entry_id: 2, field4: ''});
    console.log(parser_v1.parser(input));
    expect(parser_v1.parser(input)).toEqual([{ temperature: NaN, time: "Invalid Date", humidity: NaN, uv_index: NaN, pressure: NaN, battery: NaN }]);
  });
  
  test('Parser extra words', () => {
	  console.log(parser);
    const parser_v1 = new parser.Parser_v1();
    const input = [];
	input.push({created_at: '2022-11-23T16:20:27Z', entry_id: 2, field4: '226781101802380013320016123456'});
    console.log(parser_v1.parser(input));
    expect(parser_v1.parser(input)).toEqual([{ temperature: 22.67, time: "17:20", humidity: 81, uv_index: 2, pressure: 1018, battery: 16 }]);
  });

});
