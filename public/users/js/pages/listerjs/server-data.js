"use strict";$(document).ready(function(){new Lister({el:".table-default",per_page:5,search:!1,url:lister_default_url,table:!0,table_headers:{id:{label:"ID",attrs:{style:"min-width: auto; width: 70px;"}},image:{label:"Image",attrs:{style:"min-width: auto; width: 70px;"}},name:{label:"Name"},username:{label:"Username"},posts:{label:"Posts"},followers_count:{label:"Followers"},following_count:{label:"Following"}},templates:{tableRow:function(t,e,l){return'<tr>\n\t\t\t\t\t<td style="min-width: auto;" class="text-center">'+e.id+'</td>\n\t\t\t\t\t<td style="min-width: auto;"><img class="avatar avatar-1 rounded-circle" src="'+ROOT_URL+e.image+'" class="img-fluid"></td>\n\t\t\t\t\t<td>'+e.name+"</td>\n\t\t\t\t\t<td>"+e.username+"</td>\n\t\t\t\t\t<td>"+e.posts+"</td>\n\t\t\t\t\t<td>"+e.followers_count+"</td>\n\t\t\t\t\t<td>"+e.following_count+"</td>\n\t\t\t\t\t</tr>"}}}),new Lister({el:".table-search",search:!0,searchables:["name"],per_page:5,url:lister_search_url,table:!0,table_headers:{id:{label:"ID",attrs:{style:"min-width: auto; width: 70px;"}},image:{label:"Image",attrs:{style:"min-width: auto; width: 70px;"}},name:{label:"Name"},username:{label:"Username"},posts:{label:"Posts"},followers_count:{label:"Followers"},following_count:{label:"Following"}},templates:{tableRow:function(t,e,l){return'<tr>\n\t\t\t\t\t<td style="min-width: auto;" class="text-center">'+e.id+'</td>\n\t\t\t\t\t<td style="min-width: auto;"><img class="avatar avatar-1 rounded-circle" src="'+ROOT_URL+e.image+'" class="img-fluid"></td>\n\t\t\t\t\t<td>'+e.name+"</td>\n\t\t\t\t\t<td>"+e.username+"</td>\n\t\t\t\t\t<td>"+e.posts+"</td>\n\t\t\t\t\t<td>"+e.followers_count+"</td>\n\t\t\t\t\t<td>"+e.following_count+"</td>\n\t\t\t\t\t</tr>"}}}),new Lister({el:".table-sortable",search:!0,searchables:["name"],per_page:5,url:lister_sortable_url,table:!0,table_headers:{id:{sorter:!0,label:"ID",attrs:{style:"min-width: auto; width: 70px;"}},image:{label:"Image",attrs:{style:"min-width: auto; width: 70px;"}},name:{sorter:!0,label:"Name"},username:{label:"Username"},posts:{sorter:!0,label:"Posts"},followers_count:{sorter:!0,label:"Followers"},following_count:{sorter:!0,label:"Following"}},templates:{tableRow:function(t,e,l){return'<tr>\n\t\t\t\t\t<td style="min-width: auto;" class="text-center">'+e.id+'</td>\n\t\t\t\t\t<td style="min-width: auto;"><img class="avatar avatar-1 rounded-circle" src="'+ROOT_URL+e.image+'" class="img-fluid"></td>\n\t\t\t\t\t<td>'+e.name+"</td>\n\t\t\t\t\t<td>"+e.username+"</td>\n\t\t\t\t\t<td>"+e.posts+"</td>\n\t\t\t\t\t<td>"+e.followers_count+"</td>\n\t\t\t\t\t<td>"+e.following_count+"</td>\n\t\t\t\t\t</tr>"}}})});