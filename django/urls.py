from django.conf.urls.defaults import *
from mysite.polls.models import Choice, Poll, Geolocation

info_dict = {
    'queryset': Geolocation.objects.all(),
}


urlpatterns = patterns('',
    (r'^polls/$', 'mysite.polls.views.index'),
	(r'^backwards/$', 'mysite.polls.views.backwards'),
    (r'^polls/(?P<poll_id>\d+)/$', 'mysite.polls.views.detail'),
    (r'^polls/(?P<poll_id>\d+)/results/$', 'mysite.polls.views.results'),
    (r'^polls/(?P<poll_id>\d+)/vote/$', 'mysite.polls.views.vote'),
    (r'^geo/(?P<object_id>\d+)/$', 'django.views.generic.list_detail.object_detail', info_dict),
    (r'^geo/', 'django.views.generic.list_detail.object_list', info_dict),
    (r'^admin/', include('django.contrib.admin.urls')),
)
