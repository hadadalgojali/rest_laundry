  <table border="0" width="100%" cellspacing="0" cellpadding="3">
    <tr>
      <td width="20%"><b>URL</b></td>
      <td width="80%">: {{ $url }}{{ $title }}/{id}</td>
    </tr>
    <tr>
      <td><b>Content Type</b></td>
      <td>: application/json</td>
    </tr>
    <tr>
      <td><b>Method</b></td>
      <td>: GET</td>
    </tr>
  </table>
  <br>

  <div class="row">
    <div class="col-md-12">
      <table width="100%" border="1" cellspacing="0" cellpadding="3">
        <tr>
          <th valign="middle" width="50%">Parameter <button class="btn btn-primary btn-sm" id="btnCopy_read" style="float:right;">Copy</button></th>
          <th valign="middle" width="50%">Response</th>
        </tr>
        <tr>
          <td valign="top" style="background:#000;">
<pre class="prettyprint" id="read_params">
</pre>
          </td>
          <td valign="top" style="background:#000;">
<pre class="prettyprint">
  {
    "code": 200,
    "response": [
      {
        "id": 5,
        "description": "Satuan",
        "updated_at": "2019-05-26 09:22:12",
        "created_at": "2019-05-26 09:22:12"
      }
    ]
  }
</pre>
          </td>
        </tr>
      </table>
    </div>
  </div>
