const thingspeak = require('../src/js/thingspeak.js'); // import the DUT file here

function callback_ok(data){}
function callback_err(data){}

describe('thingspeak build', () => {
  // First test. Normal work: we use a real frame in order to test the parsering
  test('thingspeak build', () => {
	
    const ts = new thingspeak.Thingspeak("1234");
	ts.get_field_by_time("4", 60).then(callback_ok).catch(callback_err);
	
    expect(ts.last_endpoint).toEqual("fields/4");
	expect(ts.last_format).toEqual("json");
	expect(ts.channel_id).toEqual("1234");
  });
});

describe('thingspeak frame', () => {
  // First test. Normal work: we use a real frame in order to test the parsering
  test('thingspeak build', () => {
	
    const ts = new thingspeak.Thingspeak("1234");
	ts.get_latest_frame().then(callback_ok).catch(callback_err);
	
    expect(ts.last_endpoint).toEqual("feeds/last");
    expect(ts.last_format).toEqual("json");
    expect(ts.channel_id).toEqual("1234");
  });
});
