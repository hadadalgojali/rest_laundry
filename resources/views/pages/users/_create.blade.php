  <table border="0" width="100%" cellspacing="0" cellpadding="3">
    <tr>
      <td width="20%"><b>URL</b></td>
      <td width="80%">: rest_laundry.goyangpensil.com/api/v1/Users/create</td>
    </tr>
    <tr>
      <td><b>Content Type</b></td>
      <td>: application/json</td>
    </tr>
    <tr>
      <td><b>Method</b></td>
      <td>: POST</td>
    </tr>
  </table>
  <br>

  <div class="row">
    <div class="col-md-12">
      <table width="100%" border="1" cellspacing="0" cellpadding="3">
        <tr>
          <th valign="middle" width="50%">Parameter <button class="btn btn-primary btn-sm" id="btnCopy_create" style="float:right;">Copy</button></th>
          <th valign="middle" width="50%">Response</th>
        </tr>
        <tr>
          <td valign="top" style="background:#000;">
<pre class="prettyprint" id="create_params">
{
  "first_name":"Hadad",
  "last_name" :"Al Gojali",
  "birthday"  :"2019-01-01",
  "address"   :"Kabupaten Bandung",
  "email"     :"anonymous@gmail.com",
  "phone"     :"0899793xxxx"
}
</pre>
          </td>
          <td valign="top" style="background:#000;">
<pre class="prettyprint">
{
  "code"    : 200,
  "message" : "Successfully Saving!",
  "response": {
    "first_name": "Hadad",
    "last_name" : "Al Gojali",
    "birthday"  :"2019-01-01",
    "address"   :"Kabupaten Bandung",
    "email"     :"anonymous@gmail.com",
    "phone"     :"0899793xxxx",
    "id": 5
  }
}
</pre>
          </td>
        </tr>
      </table>
    </div>
  </div>
