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
            }
        );
        $scope.submitComment = function()
        {

            $scope.loading = true;
            Comment.save($scope.commentData).success(function(data)
            {
                //append comment to list
                //$scope.commentData.id = data.id;
                //$scope.comments.push($scope.commentData);
                $("#comment").val("");
                //Comment.get().success(function(getData)
                //{
                //    $scope.comments = getData;
                //    $scope.loading = false;
                //});
                $scope.commentData.id = data.id;
                $scope.comments.push($scope.commentData);
            }).error(function(data){
                console.log(data);
            });
        };
        // function to handle deleting a comment
        // DELETE A COMMENT ====================================================
        $scope.deleteComment = function(id) {
            $scope.loading = true;

            // use the function we created in our service
            Comment.destroy(id)
                .success(function(data) {

                    // if successful, we'll need to refresh the comment list
                    Comment.get()
                        .success(function(getData) {
                            $scope.comments = getData;
                            $scope.loading = false;
                        });

                });
        };

    });