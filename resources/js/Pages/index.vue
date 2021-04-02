<template>
<div class="app" id="app">
<div class="nav">
        <div class="multi-level">

            <div class="item" v-for="locality in localities" :key="locality.id">
                <input type="checkbox" id="B"/>
                <img src="" class="arrow"><label for="B"><index>{{locality.label}}</index></label>


                <ul>
                    <li>
                        <div class="sub-item">
                        <input type="checkbox" id="B-A"/>
                        <img src="" class="arrow"><label for="B-A">UI/UX</label>

                        <ul>
                            <li><a href="#">UI/UX Designer</a></li>
                            <li><a href="#">UI Designer</a></li>
                            <li><a href="#">UX Designer</a></li>
                        </ul>
                    </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
</template>

<script>
export default {
props: ['index'],
    data(){
        return{
            localities: []
        }
    },
    methods() {

    fetch('http://127.0.0.1:8000/api/localites')
    .then(response => response.json())

    .then(data => (this.localities = data));

    //  Vue.component('index', {
    //  // camelCase en JavaScript

    // template: '<h3>{{ index.label }}</h3>'
    // })

}
}
</script>



<style>


/*Func*/

.multi-level, .item ul, .nav input[type="checkbox"] {
    display: none;
}


/*Arrow*/

.arrow {
    width: 12px;
    height: 12px;
    vertical-align: middle;
    float: left;
    z-index: 0;
    margin: 17px 1em 0 2em;
}
.item input + .arrow {
    transform: rotate(-90deg);
    transition: 0.1s;
}
.item input:checked + .arrow {
    transform: rotate(0deg);
    transition: 0.1s;
}



/*Styles*/

label:hover {
    cursor: pointer;
}
label {
    width: 100%;
    display: block;
    z-index: 3;
    position: relative;
}
.nav {
    width: 100%;
    background-color: white;
    overflow-x: hidden;
    border-bottom: 1px solid #CFD8DC;
}

#nav-icon {
    font-size: 28px;
    line-height: 50px;
    padding-left: 1em;
    color: white;
    background-color: #F44336;
}

.nav ul, .nav li, label {
    line-height: 50px;
    margin: 0;
    padding: 0 2em;
    list-style: none;
    text-decoration: none;
    color: #90A4AE;
    font-weight: 100;
    width: 100%;
}
.item ul {
    padding: 0 0.25em;
}
.nav li a {
    line-height: 50px;
    margin: 0;
    padding: 0 4em;
    list-style: none;
    text-decoration: none;
    color: #90A4AE;
    font-weight: 100;
}

</style>
