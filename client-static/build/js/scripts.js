var elem=document.querySelector(".grid"),msnry=new Masonry(elem,{itemSelector:".grid-item",columnWidth:300}),elem=document.querySelector(".grid2"),msnry=new Masonry(elem,{itemSelector:".grid-item2",columnWidth:375}),elem=document.querySelector(".friends"),msnry=new Masonry(elem,{itemSelector:".friend",columnWidth:150}),elem=document.querySelector(".friends-add"),msnry=new Masonry(elem,{itemSelector:".friend",columnWidth:150});!function(a,b,c){var d={required:"The %s field is required.",matches:"The %s field does not match the %s field.","default":"The %s field is still set to default, please change.",valid_email:"The %s field must contain a valid email address.",valid_emails:"The %s field must contain all valid email addresses.",min_length:"The %s field must be at least %s characters in length.",max_length:"The %s field must not exceed %s characters in length.",exact_length:"The %s field must be exactly %s characters in length.",greater_than:"The %s field must contain a number greater than %s.",less_than:"The %s field must contain a number less than %s.",alpha:"The %s field must only contain alphabetical characters.",alpha_numeric:"The %s field must only contain alpha-numeric characters.",alpha_dash:"The %s field must only contain alpha-numeric characters, underscores, and dashes.",numeric:"The %s field must contain only numbers.",integer:"The %s field must contain an integer.",decimal:"The %s field must contain a decimal number.",is_natural:"The %s field must contain only positive numbers.",is_natural_no_zero:"The %s field must contain a number greater than zero.",valid_ip:"The %s field must contain a valid IP.",valid_base64:"The %s field must contain a base64 string.",valid_credit_card:"The %s field must contain a valid credit card number.",is_file_type:"The %s field must contain only %s files.",valid_url:"The %s field must contain a valid URL.",greater_than_date:"The %s field must contain a more recent date than %s.",less_than_date:"The %s field must contain an older date than %s.",greater_than_or_equal_date:"The %s field must contain a date that's at least as recent as %s.",less_than_or_equal_date:"The %s field must contain a date that's %s or older."},e=function(a){},f=/^(.+?)\[(.+)\]$/,g=/^[0-9]+$/,h=/^\-?[0-9]+$/,i=/^\-?[0-9]*\.?[0-9]+$/,j=/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/,k=/^[a-z]+$/i,l=/^[a-z0-9]+$/i,m=/^[a-z0-9_\-]+$/i,n=/^[0-9]+$/i,o=/^[1-9][0-9]*$/i,p=/^((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){3}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})$/i,q=/[^a-zA-Z0-9\/\+=]/i,r=/^[\d\-\s]+$/,s=/^((http|https):\/\/(\w+:{0,1}\w*@)?(\S+)|)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?$/,t=/\d{4}-\d{1,2}-\d{1,2}/,u=function(a,b,d){for(this.callback=d||e,this.errors=[],this.fields={},this.form=this._formByNameOrNode(a)||{},this.messages={},this.handlers={},this.conditionals={},a=0,d=b.length;d>a;a++){var f=b[a];if((f.name||f.names)&&f.rules)if(f.names)for(var g=0,h=f.names.length;h>g;g++)this._addField(f,f.names[g]);else this._addField(f,f.name);else console.warn("validate.js: The following field is being skipped due to a misconfiguration:"),console.warn(f),console.warn("Check to ensure you have properly configured a name and rules for this field")}var i=this.form.onsubmit;this.form.onsubmit=function(a){return function(b){try{return a._validateForm(b)&&(i===c||i())}catch(d){}}}(this)},v=function(a,b){var c;if(!(0<a.length)||"radio"!==a[0].type&&"checkbox"!==a[0].type)return a[b];for(c=0,elementLength=a.length;c<elementLength;c++)if(a[c].checked)return a[c][b]};u.prototype.setMessage=function(a,b){return this.messages[a]=b,this},u.prototype.registerCallback=function(a,b){return a&&"string"==typeof a&&b&&"function"==typeof b&&(this.handlers[a]=b),this},u.prototype.registerConditional=function(a,b){return a&&"string"==typeof a&&b&&"function"==typeof b&&(this.conditionals[a]=b),this},u.prototype._formByNameOrNode=function(a){return"object"==typeof a?a:b.forms[a]},u.prototype._addField=function(a,b){this.fields[b]={name:b,display:a.display||b,rules:a.rules,depends:a.depends,id:null,element:null,type:null,value:null,checked:null}},u.prototype._validateForm=function(a){this.errors=[];for(var b in this.fields)if(this.fields.hasOwnProperty(b)){var d=this.fields[b]||{},e=this.form[d.name];e&&e!==c&&(d.id=v(e,"id"),d.element=e,d.type=0<e.length?e[0].type:e.type,d.value=v(e,"value"),d.checked=v(e,"checked"),d.depends&&"function"==typeof d.depends?d.depends.call(this,d)&&this._validateField(d):d.depends&&"string"==typeof d.depends&&this.conditionals[d.depends]?this.conditionals[d.depends].call(this,d)&&this._validateField(d):this._validateField(d))}return"function"==typeof this.callback&&this.callback(this.errors,a),0<this.errors.length&&(a&&a.preventDefault?a.preventDefault():event&&(event.returnValue=!1)),!0},u.prototype._validateField=function(a){for(var b=a.rules.split("|"),e=a.rules.indexOf("required"),g=!a.value||""===a.value||a.value===c,h=0,i=b.length;i>h;h++){var j=b[h],k=null,l=!1,m=f.exec(j);if((-1!==e||-1!==j.indexOf("!callback_")||!g)&&(m&&(j=m[1],k=m[2]),"!"===j.charAt(0)&&(j=j.substring(1,j.length)),"function"==typeof this._hooks[j]?this._hooks[j].apply(this,[a,k])||(l=!0):"callback_"===j.substring(0,9)&&(j=j.substring(9,j.length),"function"==typeof this.handlers[j]&&!1===this.handlers[j].apply(this,[a.value,k,a])&&(l=!0)),l)){h=this.messages[a.name+"."+j]||this.messages[j]||d[j],l="An error has occurred with the "+a.display+" field.",h&&(l=h.replace("%s",a.display),k&&(l=l.replace("%s",this.fields[k]?this.fields[k].display:k)));for(var n,h=0;h<this.errors.length;h+=1)a.id===this.errors[h].id&&(n=this.errors[h]);j=n||{id:a.id,display:a.display,element:a.element,name:a.name,message:l,messages:[],rule:j},j.messages.push(l),n||this.errors.push(j)}}},u.prototype._getValidDate=function(a){if(!a.match("today")&&!a.match(t))return!1;var b=new Date;return a.match("today")||(a=a.split("-"),b.setFullYear(a[0]),b.setMonth(a[1]-1),b.setDate(a[2])),b},u.prototype._hooks={required:function(a){var b=a.value;return"checkbox"===a.type||"radio"===a.type?!0===a.checked:null!==b&&""!==b},"default":function(a,b){return a.value!==b},matches:function(a,b){var c=this.form[b];return c?a.value===c.value:!1},valid_email:function(a){return j.test(a.value)},valid_emails:function(a){a=a.value.split(/\s*,\s*/g);for(var b=0,c=a.length;c>b;b++)if(!j.test(a[b]))return!1;return!0},min_length:function(a,b){return g.test(b)?a.value.length>=parseInt(b,10):!1},max_length:function(a,b){return g.test(b)?a.value.length<=parseInt(b,10):!1},exact_length:function(a,b){return g.test(b)?a.value.length===parseInt(b,10):!1},greater_than:function(a,b){return i.test(a.value)?parseFloat(a.value)>parseFloat(b):!1},less_than:function(a,b){return i.test(a.value)?parseFloat(a.value)<parseFloat(b):!1},alpha:function(a){return k.test(a.value)},alpha_numeric:function(a){return l.test(a.value)},alpha_dash:function(a){return m.test(a.value)},numeric:function(a){return g.test(a.value)},integer:function(a){return h.test(a.value)},decimal:function(a){return i.test(a.value)},is_natural:function(a){return n.test(a.value)},is_natural_no_zero:function(a){return o.test(a.value)},valid_ip:function(a){return p.test(a.value)},valid_base64:function(a){return q.test(a.value)},valid_url:function(a){return s.test(a.value)},valid_credit_card:function(a){if(!r.test(a.value))return!1;var b=0,c=0,d=!1;a=a.value.replace(/\D/g,"");for(var e=a.length-1;e>=0;e--)c=a.charAt(e),c=parseInt(c,10),d&&9<(c*=2)&&(c-=9),b+=c,d=!d;return 0===b%10},is_file_type:function(a,b){if("file"!==a.type)return!0;var c=a.value.substr(a.value.lastIndexOf(".")+1),d=b.split(","),e=!1,f=0,g=d.length;for(f;g>f;f++)c==d[f]&&(e=!0);return e},greater_than_date:function(a,b){var c=this._getValidDate(a.value),d=this._getValidDate(b);return d&&c?c>d:!1},less_than_date:function(a,b){var c=this._getValidDate(a.value),d=this._getValidDate(b);return d&&c?d>c:!1},greater_than_or_equal_date:function(a,b){var c=this._getValidDate(a.value),d=this._getValidDate(b);return d&&c?c>=d:!1},less_than_or_equal_date:function(a,b){var c=this._getValidDate(a.value),d=this._getValidDate(b);return d&&c?d>=c:!1}},a.FormValidator=u}(window,document),"undefined"!=typeof module&&module.exports&&(module.exports=FormValidator);