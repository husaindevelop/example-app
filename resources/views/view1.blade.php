<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
    
    
    <style>
body{
margin:0px;
}
.dataTables_length,
.dataTables_wrapper {
  font-size: 1.2rem;
  select
  {
    background-color: #f9f9f9;
    border: 1px solid #999;
    border-radius: 4px;
    height: 3rem;
    line-height: 2;
    font-size: 1.2rem;
    color: #333;
  }
  input {
    background-color: #f9f9f9;
    border: 1px solid #999;
    border-radius: 4px;
    height: 3rem;
    line-height: 2;
    font-size: 1.8rem;
    color: #333;
  }

  .dataTables_length,
  .dataTables_filter {
    margin-top: 30px;
    margin-right: 20px;
    margin-bottom: 10px;
    display: inline-flex;
  }
}

// paginate

.paginate_button {
  min-width: 4rem;
  display: inline-block;
  text-align: center;
  padding: 1rem 1.6rem;
  margin-top: -1rem;
  border: 2px solid lightblue;
  &:not(.previous) {
    border-left: none;
  }
  &.previous {
    border-radius: 8px 0 0 8px;
    min-width: 7rem;
  }
  &.next {
    border-radius: 0 8px 8px 0;
    min-width: 7rem;
  }

  &:hover {
    cursor: pointer;
    background-color: #eee;
    text-decoration: none;
  }
}


    </style>
    </head>
    <body>
    
<div class="container">
  <div class="row">
    
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>Name</th>
          <th>Position</th>
          <th>Office</th>
          <th>Age</th>
          <th>Start date</th>
          <th>Salary</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Name</th>
          <th>Position</th>
          <th>Office</th>
          <th>Age</th>
          <th>Start date</th>
          <th>Salary</th>
        </tr>
      </tfoot>
      <tbody>
        <tr>
          <td>Tiger Nixon</td>
          <td>System Architect</td>
          <td>Edinburgh</td>
          <td>61</td>
          <td>2011/04/25</td>
          <td>$320,800</td>
        </tr>
        <tr>
          <td>Garrett Winters</td>
          <td>Accountant</td>
          <td>Tokyo</td>
          <td>63</td>
          <td>2011/07/25</td>
          <td>$170,750</td>
        </tr>
        <tr>
          <td>Ashton Cox</td>
          <td>Junior Technical Author</td>
          <td>San Francisco</td>
          <td>66</td>
          <td>2009/01/12</td>
          <td>$86,000</td>
        </tr>
        <tr>
          <td>Cedric Kelly</td>
          <td>Senior Javascript Developer</td>
          <td>Edinburgh</td>
          <td>22</td>
          <td>2012/03/29</td>
          <td>$433,060</td>
        </tr>
        <tr>
          <td>Airi Satou</td>
          <td>Accountant</td>
          <td>Tokyo</td>
          <td>33</td>
          <td>2008/11/28</td>
          <td>$162,700</td>
        </tr>
        <tr>
          <td>Brielle Williamson</td>
          <td>Integration Specialist</td>
          <td>New York</td>
          <td>61</td>
          <td>2012/12/02</td>
          <td>$372,000</td>
        </tr>
        <tr>
          <td>Herrod Chandler</td>
          <td>Sales Assistant</td>
          <td>San Francisco</td>
          <td>59</td>
          <td>2012/08/06</td>
          <td>$137,500</td>
        </tr>
        <tr>
          <td>Rhona Davidson</td>
          <td>Integration Specialist</td>
          <td>Tokyo</td>
          <td>55</td>
          <td>2010/10/14</td>
          <td>$327,900</td>
        </tr>
        <tr>
          <td>Colleen Hurst</td>
          <td>Javascript Developer</td>
          <td>San Francisco</td>
          <td>39</td>
          <td>2009/09/15</td>
          <td>$205,500</td>
        </tr>
        <tr>
          <td>Sonya Frost</td>
          <td>Software Engineer</td>
          <td>Edinburgh</td>
          <td>23</td>
          <td>2008/12/13</td>
          <td>$103,600</td>
        </tr>
        <tr>
          <td>Jena Gaines</td>
          <td>Office Manager</td>
          <td>London</td>
          <td>30</td>
          <td>2008/12/19</td>
          <td>$90,560</td>
        </tr>
        <tr>
          <td>Quinn Flynn</td>
          <td>Support Lead</td>
          <td>Edinburgh</td>
          <td>22</td>
          <td>2013/03/03</td>
          <td>$342,000</td>
        </tr>
        <tr>
          <td>Charde Marshall</td>
          <td>Regional Director</td>
          <td>San Francisco</td>
          <td>36</td>
          <td>2008/10/16</td>
          <td>$470,600</td>
        </tr>
        <tr>
          <td>Haley Kennedy</td>
          <td>Senior Marketing Designer</td>
          <td>London</td>
          <td>43</td>
          <td>2012/12/18</td>
          <td>$313,500</td>
        </tr>
        <tr>
          <td>Tatyana Fitzpatrick</td>
          <td>Regional Director</td>
          <td>London</td>
          <td>19</td>
          <td>2010/03/17</td>
          <td>$385,750</td>
        </tr>
        <tr>
          <td>Michael Silva</td>
          <td>Marketing Designer</td>
          <td>London</td>
          <td>66</td>
          <td>2012/11/27</td>
          <td>$198,500</td>
        </tr>
        <tr>
          <td>Paul Byrd</td>
          <td>Chief Financial Officer (CFO)</td>
          <td>New York</td>
          <td>64</td>
          <td>2010/06/09</td>
          <td>$725,000</td>
        </tr>
        <tr>
          <td>Gloria Little</td>
          <td>Systems Administrator</td>
          <td>New York</td>
          <td>59</td>
          <td>2009/04/10</td>
          <td>$237,500</td>
        </tr>
        <tr>
          <td>Bradley Greer</td>
          <td>Software Engineer</td>
          <td>London</td>
          <td>41</td>
          <td>2012/10/13</td>
          <td>$132,000</td>
        </tr>
        <tr>
          <td>Dai Rios</td>
          <td>Personnel Lead</td>
          <td>Edinburgh</td>
          <td>35</td>
          <td>2012/09/26</td>
          <td>$217,500</td>
        </tr>
        <tr>
          <td>Jenette Caldwell</td>
          <td>Development Lead</td>
          <td>New York</td>
          <td>30</td>
          <td>2011/09/03</td>
          <td>$345,000</td>
        </tr>
   
      </tbody>
    </table>

  </div>
</div>
<script>
$(document).ready(function() {
  $("#example").DataTable();
});

</script>
    </body>
</html>