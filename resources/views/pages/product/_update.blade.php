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
    <td>: PUT</td>
  </tr>
</table>
<br>

<div class="row">
  <div class="col-md-12">
    <table width="100%" border="1" cellspacing="0" cellpadding="3">
      <tr>
        <th valign="middle" width="50%">Parameter <button class="btn btn-primary btn-sm" id="btnCopy_update" style="float:right;">Copy</button></th>
        <th valign="middle" width="50%">Response</th>
      </tr>
      <tr>
        <td valign="top" style="background:#000;">
<pre class="prettyprint" id="update_params">
  {
		"id_class" : "3",
		"code"     :"SM001",
		"name"     :"Selimut"
  }
</pre>
        </td>
        <td valign="top" style="background:#000;">
<pre class="prettyprint">
  {
    "code"    : 200,
    "message" : "Successfully Updated!",
    "response": {
      "id"        : 13,
      "id_class"  : "3",
      "code"      : "SM001",
      "name"      : "Selimut",
      "updated_at": "2019-05-26 05:17:04",
      "created_at": "2019-05-26 05:16:08"
    }
  }
</pre>
        </td>
      </tr>
    </table>
  </div>
</div>
