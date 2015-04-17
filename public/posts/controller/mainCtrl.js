/**
 * Created by Nhuan on 4/8/2015.
 */
angular.module('mainCtrl',[])
    .controller('mainController',function($scope,$http,Comment)
    {
        //hold all comments data
        $scope.commentData = {};
        $scope.loading = false;
        Comment.get().success(function(data)
            {
                $scope.comments = data;
                $scope.loading = true;
            }).error(function(data){
            console.log(data);
        });
        $scope.submitComment = function()
        {
            $scope.loading = true;
            Comment.save($scope.commentData).success(function(data)
            {
                //append comment to list
                //$scope.commentData.id = data.id;
                //$scope.comments.push($scope.commentData);
                //Comment.get().success(function(getData)
                //{
                //    $scope.comments = getData;
                //    $scope.loading = false;
                //});
                $("#comment").val("");
                //Comment.get().success(function(getData)
                //{
                //    $scope.comments = getData;
                //    $scope.loading = false;
                //})
                console.log(data);
                $scope.comments.push(data);
            }).error(function(data){
                console.log(data);
            });
        };
        $scope.deleteComment = function(id,$index)
        {
            $scope.loading = true;
            console.log($index);
            Comment.destroy(id).success(function(data)
            {
                //Comment.get().success(function(getData)
                //{
                //    $scope.comments = getData;
                //    $scope.loading = false;
                //});
                $scope.comments.splice($index,1);
            });
        };
    });