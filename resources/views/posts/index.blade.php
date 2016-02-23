@extends('app')
@section('content')
    <div class="section-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">Featured Content</h1>
          </div>
        </div>
      </div> <!-- /.container -->
    </div> <!-- /.section-colored -->
    <div class="container container-int">
      <div class="row ">
          <div class="col-sm-8">
              <tasks></tasks>
          </div>
          <div class="col-sm-4">
            <div class="panel panel-body ">
              <div class="panel-body">
                <div class="col-md-12">
                     <div class="form-group filter">
                       <label class="control-label">Site:</label>
                       <select class="form-control filter-select input-sm">
                         <option>Site1</option>
                         <option>Site2</option>
                       </select>
                     </div>
                     <div class="form-group filter">
                       <label class="control-label">Filter:</label>
                       <select class="form-control filter-select input-sm">
                         <option>All</option>
                         <option>Active</option>
                       </select>
                     </div>
                     <div class="form-group filter">
                       <input type="text" class="form-control filter-textbox input-sm">
                     </div>
                     <div class="form-group filter">
                       <button class="btn btn-primary btn-xs">Download</button>
                       <button class="btn btn-primary btn-xs">Clear</button>
                       <button class="btn btn-primary btn-xs">Save All</button>
                     </div>
                   </div>
                   <div class="col-md-5">
                     <div class="form-group filter">
                       <input type="text" class="form-control filter-textbox input-sm" style="visibility:hidden;width:10px">
                     	<label>Popular Tags: </label>
                       <span class="label label-info">funny</span>
                     </div>
                   </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
      <template id="tasks-template">
          <div class="row" v-for="task in list  | orderBy 'create_time'">
                <div class="panel panel-body " style="border-left:2px solid #2090ac" >
                  <img class="col-md-12 thumbnail img-responsive" src="http://www.somepets.com/wp-content/uploads/2013/09/funny-cat11.jpg" alt="" />
                    <div class="caption">
                      <a class="" href="post/@{{ task.slug }}">
                        <h2 class="">@{{ task.title  }} <small class="hidden">@{{ task.settlement }}</small></h2>
                      </a>
                    </div>
                    <hr>
                    <a class="" href="post/@{{task.slug }}">Read More</a>
                </div>
           </div>
      </template>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.16/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.7.0/vue-resource.min.js"></script>

<script>
  //
      Vue.component('tasks',{

        template:'#tasks-template',

        data: function(){
          return {
            list:[]
          };
        },

        created: function(){
          this.fetchTaskList();
        },

        methods:{
          fetchTaskList:function(){
            var resource = this.$resource('api/posts');
            resource.get(function(tasks){
              this.list=tasks;
            }.bind(this));
          },
          deleteTask:function(){
            this.list.$remove(task);
          }
        },
      });

      new Vue({
        el:'body'
      });
</script>
@stop
