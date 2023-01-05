/* eslint-disable no-var, semi, no-undef, no-unused-vars, camelcase */
class Thingspeak {
  url_base = 'https://api.thingspeak.com/channels/';
  feeds = 'feeds';
  fields = 'fields';
  last_endpoint = 'none';
  last_format = 'none';
  channel_id;
  field_name;
  format;
  constructor (channel_id, format = 'json') {
    this.channel_id = channel_id;
    this.format = format;
  }

  // Method: build_url
  // Return a string representing an URL by concatenating different fields:
  // - endpoint: web to ask for, for instance, feeds
  // - params: url parameters, for instance, "start" and "end". It must follow the url name convention (example: "results=120&average=60")
  //
  // "params != "" ? "?" + params : """ ------> if params is different of "" then ?params if not ""
  #build_url (endpoint, params = '') {
    const p = params !== '' ? '?' + params : '';
    const url = this.url_base + this.channel_id + '/' + endpoint + '.' + this.format + p;
    this.last_endpoint = endpoint;
    this.last_format = this.format;
    console.log(url);
    return url;
  }

  // Method: connect
  // Perform the FETCH request.
  // Return data
  #connect (url) {
    switch (this.last_format) {
      case 'json':
        return fetch(url).then(blob => blob.json());
    }
  }

  // OK
  get_field (field_name) {
    // example: https://api.thingspeak.com/channels/<channel_id>/fields/<field_id>.<format>
    const url = this.#build_url(this.fields + '/' + field_name);
    const promise = this.#connect(url, callback_ok, callback_err);
    return promise;
  }

  // OK
  get_latest_frame () {
    // example: https://api.thingspeak.com/channels/<channel_id>/feeds/last.<format>
    const url = this.#build_url(this.feeds + '/last');
    const promise = this.#connect(url, callback_ok, callback_err);
    return promise;
  }

  // OK
  get_latest_field (field_name) {
    // example: https://api.thingspeak.com/channels/<channel_id>/fields/<field_id>/last.<format>
    const url = this.#build_url(this.fields + '/' + field_name + '/last');
    const promise = this.#connect(url, callback_ok_last, callback_err)
    return promise;
  }

  // DATE FORMAT START "AAAA-MM-DD" END "AAAA-MM-DD"
  // OK
  get_frame_by_date (start, end) {
    // example: https://api.thingspeak.com/channels/<channel_id>/feeds.<format>?start=...&end=...
    const parameters = 'start=' + start + '&end=' + end;
    const url = this.#build_url(this.feeds, parameters);
    const promise = this.#connect(url, callback_ok, callback_err);
    return promise;
  }

  // OK
  get_field_by_date (field_name, start, end) {
    // example: https://api.thingspeak.com/channels/<channel_id>/fields/<field_id>.<format>?start...&end...
    const parameters = 'start=' + start + '&end=' + end;
    const url = this.#build_url(this.fields + '/' + field_name, parameters);
    const promise = this.#connect(url, callback_ok, callback_err);
    return promise;
  }

  get_field_by_time (field_name, minutes) {
    // example: https://api.thingspeak.com/channels/<channel_id>/fields/<field_id>.<format>
    const parameters = 'minutes=' + minutes
    const url = this.#build_url(this.fields + '/' + field_name, parameters);
    const promise = this.#connect(url, callback_ok, callback_err);
    return promise;
  }
}
