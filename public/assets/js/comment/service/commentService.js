/**
 * Created by Nhuan on 4/8/2015.
 */
var service = angular.module('commentService',[]);
service.factory('Comment',function($http)
{
    return{
        get: function(){
            var url = window.location.href + "/comments";
            //var url = "http://localhost/meduza/public/api/comments";
            return $http.get(url);
        },
        save: function(commentData)
        {
            var url = window.location.href + "/comments";
			console.log("Form to server: " + commentData);
            //var url = "http://localhost/meduza/public/api/comments";
            return $http(
                {
                    method:'post',
                    url:url,
                    headers: {'Content-Type':'application/x-www-form-urlencoded'},
                    data: $.param(commentData)
                }
            );
        },
        // destroy a comment
        destroy : function(id) {
            //var url = "http://localhost/meduza/public/api/comments/";
            var url = window.location.href + "/comments/";
            return $http.delete(url + id);
        }
    }
});