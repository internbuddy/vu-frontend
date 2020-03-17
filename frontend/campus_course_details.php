

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="apple-touch-icon" type="image/png" href="https://static.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">
<link rel='stylesheet' href='https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css'>
<style>

.allRows {
    background-color: #fff;
    color: #000;
  }
  .evenRows {
    background-color: hsl(0, 0%, 100%);
  }
  .oddRows {
    background-color: hsl(240, 60%, 98%);
  }
  /* hovered rows */
  .oddHovered {
    background-color: hsl(0, 0%, 80%);
  }
  .evenHovered {
    background-color: hsl(0, 0%, 90%);
  }
  /* Columns widget */
  /* saturate( darken( desaturate(@headerBackground, 10%), 10% ), 30%); */
  /* Filter widget transition */
  .filterWidgetTransition {
    -webkit-transition: line-height 0.1s ease;
    -moz-transition: line-height 0.1s ease;
    -o-transition: line-height 0.1s ease;
    transition: line-height 0.1s ease;
  }
  /*** icon block ***/
  .iconPosition {
    font-size: 11px;
    position: absolute;
    right: 2px;
    top: 50%;
    margin-top: -7px;
    /* half the icon height; older IE doesn't like this */
    width: 14px;
    height: 14px;
    background-repeat: no-repeat;
    line-height: 14px;
  }
  /* black */
  /* white */
  /* automatically choose the correct arrow/text color */
  /* variable theme name - requires less.js 1.3+;
     or just replace (!".@{theme}") with the contents of @theme
  */
  .tablesorter-bootstrap {
    font: 14px "Helvetica Neue", Helvetica, Arial, sans-serif;
    background-color: hsl(211, 100%,8 9%);
    width: 100%;
    /* style th's outside of the thead */
    /* style header */
    /* bootstrap uses <i> for icons */
    /* tfoot */
    /* optional disabled input styling */
    /* body */
    /* hovered row colors
      you'll need to add additional lines for
      rows with more than 2 child rows
      */
    /* table processing indicator - indeterminate spinner */
    /* Column Widget - column sort colors */
    /* caption (non-theme matching) */
    /* filter widget */
    /* hidden filter row */
    /* rows hidden by filtering (needed for child rows) */
    /* ajax error row */
  }
  .tablesorter-bootstrap th,
  .tablesorter-bootstrap thead td {
    font: 14px bold Arial, Sans-serif;
    font-weight: bold;
    background-color:  hsl(210, 99%, 69%);
    color: #000;
    border-collapse: collapse;
    margin: 0 0 18px;
    padding: 4px;
  }
  .tablesorter-bootstrap tbody td,
  .tablesorter-bootstrap tfoot th,
  .tablesorter-bootstrap tfoot td {
    padding: 4px;
    vertical-align: top;
  }
  .tablesorter-bootstrap .tablesorter-header {
    cursor: pointer;
  }
  .tablesorter-bootstrap .tablesorter-header-inner {
    position: relative;
    padding: 4px 20px 4px 4px;
  }
  .tablesorter-bootstrap .tablesorter-header-inner i.tablesorter-icon {
    font-size: 11px;
    position: absolute;
    right: 2px;
    top: 50%;
    margin-top: -7px;
    /* half the icon height; older IE doesn't like this */
    width: 14px;
    height: 14px;
    background-repeat: no-repeat;
    line-height: 14px;
  }
  .tablesorter-bootstrap .tablesorter-header.sorter-false {
    cursor: default;
  }
  .tablesorter-bootstrap .tablesorter-header.sorter-false i.tablesorter-icon {
    display: none;
  }
  .tablesorter-bootstrap .tablesorter-header.sorter-false .tablesorter-header-inner {
    padding: 4px;
  }
  .tablesorter-bootstrap .tablesorter-headerAsc {
    background-color: hsl(235, 60%, 90%);
  }
  .tablesorter-bootstrap .tablesorter-headerDesc {
    background-color: hsl(235, 60%, 90%);
  }
  .tablesorter-bootstrap .bootstrap-icon-unsorted {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAsAAAAOCAMAAADOvxanAAAAVFBMVEUAAABCQkJZWVkZGRnJyckgICAZGRkZGRn8/PweHh4dHR0aGhoaGhpUVFQbGxvQ0NDc3NxMTExSUlIbGxvr6+s4ODhKSkogICAtLS00NDQzMzMnJydSEPrQAAAAGHRSTlMA1ssZRLgdAQbDyisqsZo8QdXUq0r9xPepSRwiAAAAX0lEQVQI13XHSQKAIAwEwQAKxn13Ev7/T2Pu9qmarJKPXIicI4PH4hxaKNrhm2S8bJK5h4YzKHrzJNtK6yYT/TdXzpS5zuYg4MSQYF6i4IHExdw1UVRi05HPrrvT53a+qyMFC9t04gcAAAAASUVORK5CYII=);
    color:  hsl(211, 100%, 89%);
  }
  .tablesorter-bootstrap tfoot .tablesorter-headerAsc,
  .tablesorter-bootstrap tfoot .tablesorter-headerDesc {
    /* remove sort arrows from footer */
    background-image: none;
  }
  .tablesorter-bootstrap .disabled {
    opacity: 0.5;
    filter: alpha(opacity=50);
    cursor: not-allowed;
  }
  .tablesorter-bootstrap tbody {
    /* Zebra Widget - row alternating colors */
  }
  .tablesorter-bootstrap tbody td {
    background-color: #15317E;
    color: #000000;
    padding: 4px;
    vertical-align: top;
  }
  .tablesorter-bootstrap tbody tr.odd > td {
    background-color: hsl(210, 99%, 69%)	;
  }
  .tablesorter-bootstrap tbody tr.even > td {
    background-color: hsl(211, 100%,8 9%);
  }
  .tablesorter-bootstrap tbody > tr.hover > td,
  .tablesorter-bootstrap tbody > tr:hover > td,
  .tablesorter-bootstrap tbody > tr:hover + tr.tablesorter-childRow > td,
  .tablesorter-bootstrap tbody > tr:hover + tr.tablesorter-childRow + tr.tablesorter-childRow > td,
  .tablesorter-bootstrap tbody > tr.even.hover > td,
  .tablesorter-bootstrap tbody > tr.even:hover > td,
  .tablesorter-bootstrap tbody > tr.even:hover + tr.tablesorter-childRow > td,
  .tablesorter-bootstrap tbody > tr.even:hover + tr.tablesorter-childRow + tr.tablesorter-childRow > td {
    background-color: hsl(211, 100%, 89%) ;
  }
  .tablesorter-bootstrap tbody > tr.odd.hover > td,
  .tablesorter-bootstrap tbody > tr.odd:hover > td,
  .tablesorter-bootstrap tbody > tr.odd:hover + tr.tablesorter-childRow > td,
  .tablesorter-bootstrap tbody > tr.odd:hover + tr.tablesorter-childRow + tr.tablesorter-childRow > td {
    background-color: hsl(210, 99%, 69% );
  }
  .tablesorter-bootstrap .tablesorter-processing {
    background-image: url('data:image/gif;base64,R0lGODlhFAAUAKEAAO7u7lpaWgAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh+QQBCgACACwAAAAAFAAUAAACQZRvoIDtu1wLQUAlqKTVxqwhXIiBnDg6Y4eyx4lKW5XK7wrLeK3vbq8J2W4T4e1nMhpWrZCTt3xKZ8kgsggdJmUFACH5BAEKAAIALAcAAAALAAcAAAIUVB6ii7jajgCAuUmtovxtXnmdUAAAIfkEAQoAAgAsDQACAAcACwAAAhRUIpmHy/3gUVQAQO9NetuugCFWAAAh+QQBCgACACwNAAcABwALAAACE5QVcZjKbVo6ck2AF95m5/6BSwEAIfkEAQoAAgAsBwANAAsABwAAAhOUH3kr6QaAcSrGWe1VQl+mMUIBACH5BAEKAAIALAIADQALAAcAAAIUlICmh7ncTAgqijkruDiv7n2YUAAAIfkEAQoAAgAsAAAHAAcACwAAAhQUIGmHyedehIoqFXLKfPOAaZdWAAAh+QQFCgACACwAAAIABwALAAACFJQFcJiXb15zLYRl7cla8OtlGGgUADs=');
    background-position: center center;
    background-repeat: no-repeat;
  }
  .tablesorter-bootstrap tr.odd td.primary {
    background-color: hsl(210, 99%, 69%);
  }
  .tablesorter-bootstrap td.primary,
  .tablesorter-bootstrap tr.even td.primary {
    background-color: ;
  }
  .tablesorter-bootstrap tr.odd td.secondary {
    background-color:  hsl(211, 100%, 89%);
  }
  .tablesorter-bootstrap td.secondary,
  .tablesorter-bootstrap tr.even td.secondary {
    background-color:  hsl(211, 100%, 89%) ;
  }
  .tablesorter-bootstrap tr.odd td.tertiary {
    background-color:  hsl(211, 100%, 89%);
  }
  .tablesorter-bootstrap td.tertiary,
  .tablesorter-bootstrap tr.even td.tertiary {
    background-color:  hsl(211, 100%, 89%);
  }
  .tablesorter-bootstrap caption {
    background-color:  hsl(211, 100%, 89%);
  }
  .tablesorter-bootstrap .tablesorter-filter-row input,
  .tablesorter-bootstrap .tablesorter-filter-row select {
    width: 98%;
    margin: 0;
    padding: 4px;
    color:  hsl(211, 100%, 89%);
    background-color: #fff;
    border: 1px solid #bbb;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-transition: line-height 0.1s ease;
    -moz-transition: line-height 0.1s ease;
    -o-transition: line-height 0.1s ease;
    transition: line-height 0.1s ease;
  }
  .tablesorter-bootstrap .tablesorter-filter-row {
    background-color:  hsl(211, 100%, 89%);
  }
  .tablesorter-bootstrap .tablesorter-filter-row td {
    background-color:  hsl(211, 100%, 89%);
    line-height: normal;
    text-align: center;
    /* center the input */
    -webkit-transition: line-height 0.1s ease;
    -moz-transition: line-height 0.1s ease;
    -o-transition: line-height 0.1s ease;
    transition: line-height 0.1s ease;
  }
  .tablesorter-bootstrap .tablesorter-filter-row.hideme td {
    padding: 2px;
    margin: 0;
    line-height: 0;
    cursor: pointer;
  }
  .tablesorter-bootstrap .tablesorter-filter-row.hideme * {
    height: 1px;
    min-height: 0;
    border: 0;
    padding: 0;
    margin: 0;
    /* don't use visibility: hidden because it disables tabbing */
    opacity: 0;
    filter: alpha(opacity=0);
  }
  .tablesorter-bootstrap .filtered {
    display: none;
  }
  .tablesorter-bootstrap .tablesorter-errorRow td {
    text-align: center;
    cursor: pointer;
    background-color:  hsl(211, 100%, 89%);
  }
</style>
<script>
  window.console = window.console || function(t) {};
</script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
</head>
<body translate="no">
<h2 align="center">Course Details</h2>


<br>
<br>
<table class="tablesorter-bootstrap">
<thead>
<tr>
<th>Student Name</th>
<th>Percentage</th>
<th class="filter-select filter-exact" data-placeholder="Pick course type">Gender</th>
<th>Address</th>
<th>Age</th>
<th>Contact</th>
<th>Application Date</th></tr>
</thead>
<tbody>
<tr><td>Student1</td><td>70</td><td>male</td><td>City1</td><td>70</td><td>75</td><td>80</td></tr>
<tr><td>Student2</td><td>60</td><td>female</td><td>City2</td><td>88</td><td>100</td><td>90</td></tr>
<tr><td>Student3</td><td>50</td><td>male</td><td>City3</td><td>95</td><td>80</td><td>85</td></tr>
<tr><td>Student4</td><td>88</td><td>female</td><td>City4</td><td>55</td><td>100</td><td>100</td></tr>
<tr><td>Student5</td><td>78</td><td>male</td><td>City5</td><td>80</td><td>95</td><td>80</td></tr>
<tr><td>Student6</td><td>44</td><td>female</td><td>City6</td><td>99</td><td>100</td><td>90</td></tr>
<tr><td>Student7</td><td>55</td><td>male</td><td>City7</td><td>68</td><td>90</td><td>90</td></tr>
<tr><td>Student8</td><td>74</td><td>female</td><td>City8</td><td>90</td><td>90</td><td>85</td></tr>
<tr><td>Student9</td><td>62</td><td>male</td><td>City9</td><td>50</td><td>65</td><td>75</td></tr>
<tr><td>Student10</td><td>74</td><td>female</td><td>City10</td><td>100</td><td>100</td><td>90</td></tr>
<tr><td>Student11</td><td>96</td><td>female</td><td>City11</td><td>85</td><td>100</td><td>100</td></tr>
<tr><td>Student12</td><td>74</td><td>female</td><td>City12</td><td>75</td><td>70</td><td>85</td></tr>
<tr><td>Student13</td><td>81</td><td>male</td><td>City13</td><td>80</td><td>100</td><td>90</td></tr>
<tr><td>Student14</td><td>80</td><td>male</td><td>City14</td><td>45</td><td>55</td><td>90</td></tr>
</tbody>
</table>
<style>body { margin: 10px; }</style>
<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-db44b196776521ea816683afab021f757616c80860d31da6232dedb8d7cc4862.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://mottie.github.io/tablesorter/js/jquery.tablesorter.js'></script>
<script src='https://mottie.github.io/tablesorter/js/jquery.tablesorter.widgets.js'></script>
<script src='https://mottie.github.io/tablesorter/addons/pager/jquery.tablesorter.pager.js'></script>
<script id="rendered-js">
var $table = $('table'),
process = false;

$('.error').click(function () {
  $.tablesorter.showError($table, 'This is the error row');
});

$('.process').click(function () {
  process = !process;
  $.tablesorter.isProcessing($table, process);
});

$('.sortable').click(function () {
  $table.
  find('.tablesorter-header:last').toggleClass('sorter-false').
  trigger('update');
});

$table.tablesorter({
  theme: 'bootstrap',
  headerTemplate: '{content} {icon}',
  sortList: [[0, 0], [1, 0], [2, 0]],
  widgets: ['zebra', 'columns', 'filter', 'uitheme'] });
//# sourceURL=pen.js
    </script>
</body>
</html>
