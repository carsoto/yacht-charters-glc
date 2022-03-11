<template>
<div class="container">
  <form>
        <div class="form-group">
          <label for="exampleFormControlInput1">Full Name</label>
          <input
            type="text"
            class="form-control"
            id="exampleFormControlInput1"
            placeholder="Jhon Doe"
          />
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput1">Email</label>
          <input
            type="text"
            class="form-control"
            id="exampleFormControlInput1"
            placeholder="broker@example.com"
          />
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput1">Company</label>
          <input
            type="text"
            class="form-control"
            id="exampleFormControlInput1"
            placeholder="Company"
          />
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
          <label for="exampleFormControlSelect1">Area code</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>+56</option>
            <option>+1</option>
            <option>+593</option>
            <option>+507</option>
            <option>+58</option>
          </select>  
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
        <label for="exampleFormControlInput1">Phone</label>
          <input
            type="text"
            class="form-control"
            id="exampleFormControlInput1"
            placeholder="Phone"
          />
          </div>
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput1">Password to access</label>
          <input
            type="text"
            class="form-control"
            id="exampleFormControlInput1"
            placeholder="Password"
          />
        </div>
        <div class="float-right">
        <button type="button" class="btn btn-secondary btn-sm mr-3">Cancel</button>
        <button type="button" class="btn btn-danger btn-sm">Save</button>
        </div>

      </form>
</div>
  <!--<div class="card">
    <div class="card-header">
      <h1>{{ title }}</h1>
    </div>
    <div class="card-body">
      <div class="form-group">
          <label for="exampleFormControlInput1">Email address</label>
          <input
            type="text"
            class="form-control"
            id="exampleFormControlInput1"
            placeholder="name@example.com"
          />
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Example select</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect2">Example multiple select</label>
          <select multiple class="form-control" id="exampleFormControlSelect2">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Example textarea</label>
          <textarea
            class="form-control"
            id="exampleFormControlTextarea1"
            rows="3"
          ></textarea>
        </div>
    </div>
  </div>-->
</template>
<script>
export default {
  setup: () => ({
    title: "VUE ARE INSTALLED 22",
  }),
};
</script>
