﻿from django.shortcuts import render_to_response, get_object_or_404
from django.http import HttpResponseRedirect
from mysite.polls.models import Choice, Poll, Geolocation

def index(request):
    latest_poll_list = Poll.objects.all().order_by('-pub_date')
    return render_to_response('polls/index.html', {'latest_poll_list': latest_poll_list})

def backwards(request):
    latest_poll_list = Poll.objects.all().order_by('pub_date')
    return render_to_response('polls/index.html', {'latest_poll_list': latest_poll_list})
    
def vote(request, poll_id):
    p = get_object_or_404(Poll, pk=poll_id)
    try:
        selected_choice = p.choice_set.get(pk=request.POST['choice'])
    except (KeyError, Choice.DoesNotExist):
        # Redisplay the poll voting form.
        return render_to_response('polls/detail.html', {
            'poll': p,
            'error_message': "You didn't select a choice.",
        })
    else:
        selected_choice.votes += 1
        selected_choice.save()
        # Always return an HttpResponseRedirect after successfully dealing
        # with POST data. This prevents data from being posted twice if a
        # user hits the Back button.
        return HttpResponseRedirect('/polls/%s/results/' % p.id)
        
def detail(request, poll_id):
    p = get_object_or_404(Poll, pk=poll_id)
    return render_to_response('polls/poll_detail.html', {'poll': p})
    
def results(request, poll_id):
    p = get_object_or_404(Poll, pk=poll_id)
    return render_to_response('polls/results.html', {'poll': p})
