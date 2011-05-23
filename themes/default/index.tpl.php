{% extends layouts/rightsidebar %}

{% block pageTitle %}Index{% endblock %}

{% block sidebar %}
	{% parentblock %}
	<p>This blog has all of {{items|length}} item{{items|pluralize}}.</p>
{% endblock %}

{% block content %}
	{% for item in items %}
        <div class="article">
            <a href="{% url index.php/article/view item.id item.title|slugify %}" class="item-title">
                {{item.title}}
            </a>
            <span class="item-info">
                Posted {{item.published}} by {{item.author.name}}.
            </span>
            <div class="item-content">
                {{item.body}}
            </div>
            <div class="item-type">
                {{item.type.name}} {{item.type_id}}
            </div>
        </div>
	{% empty %}
        <span class="badnews">There are no items!</span>
	{% endfor %}
{% endblock %}

