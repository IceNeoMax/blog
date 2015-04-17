/**
 * Created by Nhuan on 4/8/2015.
 */
var commentApp = angular.module('commentApp',['mainCtrl','commentService'],function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>')});