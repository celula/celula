Ember.TEMPLATES["new-participant"] = Handlebars.template(function anonymous(Handlebars,depth0,helpers,partials,data) {
helpers = helpers || Ember.Handlebars.helpers;
  var buffer = '', stack1, stack2, stack3, stack4, foundHelper, tmp1, self=this, escapeExpression=this.escapeExpression;


  data.buffer.push("<div class=\"add-new-visitor-box\">\n  ");
  stack1 = depth0;
  stack2 = "Em.TextField";
  stack3 = {};
  stack4 = "name";
  stack3['valueBinding'] = stack4;
  stack4 = "Nome do visitante";
  stack3['placeholder'] = stack4;
  stack4 = helpers.view;
  tmp1 = {};
  tmp1.hash = stack3;
  tmp1.contexts = [];
  tmp1.contexts.push(stack1);
  tmp1.data = data;
  stack1 = stack4.call(depth0, stack2, tmp1);
  data.buffer.push(escapeExpression(stack1) + "\n\n  <div>\n  <a ");
  stack1 = depth0;
  stack2 = "saveNewVisitor";
  stack3 = helpers.action;
  tmp1 = {};
  tmp1.hash = {};
  tmp1.contexts = [];
  tmp1.contexts.push(stack1);
  tmp1.data = data;
  stack1 = stack3.call(depth0, stack2, tmp1);
  data.buffer.push(escapeExpression(stack1) + " class=\"btn btn-success\">Salvar</a>\n  <a ");
  stack1 = depth0;
  stack2 = "closeNewVisitor";
  stack3 = helpers.action;
  tmp1 = {};
  tmp1.hash = {};
  tmp1.contexts = [];
  tmp1.contexts.push(stack1);
  tmp1.data = data;
  stack1 = stack3.call(depth0, stack2, tmp1);
  data.buffer.push(escapeExpression(stack1) + ">\n    <i class=\"icon-remove style-icon-remove\"></i>\n  </a>\n  </div>\n</div>\n\n\n<p class=\"add-visitor\" ");
  stack1 = depth0;
  stack2 = "addNewVisitor";
  stack3 = helpers.action;
  tmp1 = {};
  tmp1.hash = {};
  tmp1.contexts = [];
  tmp1.contexts.push(stack1);
  tmp1.data = data;
  stack1 = stack3.call(depth0, stack2, tmp1);
  data.buffer.push(escapeExpression(stack1) + ">\n  <i class=\"icon-plus\"></i>\n  Adicionar visitante\n</p>");
  return buffer;
});