"use strict";$(document).ready(function(){$("#datatable-filters").DataTable({initComplete:function(){this.api().columns().every(function(){var t=this,a=$('<select class="form-control form-control-sm"><option value="" selected>Show All</option></select>').appendTo($(t.header()).parent().parent().next().find("tr th").eq($(t.header()).prevAll().length).empty()).on("change",function(){var e=$.fn.dataTable.util.escapeRegex($(this).val());t.search(e?"^"+e+"$":"",!0,!1).draw()});t.data().unique().sort().each(function(e,t){a.append('<option value="'+e+'">'+e+"</option>")})})}})}),$(document).ready(function(){$("#datatable-filters-footer").DataTable({initComplete:function(){this.api().columns().every(function(){var t=this,a=$('<select class="form-control form-control-sm"><option value="" selected>Show All</option></select>').appendTo($(t.footer()).empty()).on("change",function(){var e=$.fn.dataTable.util.escapeRegex($(this).val());t.search(e?"^"+e+"$":"",!0,!1).draw()});t.data().unique().sort().each(function(e,t){a.append('<option value="'+e+'">'+e+"</option>")})})}})});