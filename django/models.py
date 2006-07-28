from django.db import models
import datetime

class Poll(models.Model):
    question = models.CharField(maxlength=200)
    pub_date = models.DateTimeField('date published')
    def __str__(self):
        return self.question
    def was_published_today(self):
        return self.pub_date.date() == datetime.date.today()
    def how_many(self):
        return self.choice_set.all().count()
    class Admin:
        list_display = ('question', 'pub_date', 'how_many')
        list_filter = ['pub_date']
        pass

class Choice(models.Model):
    poll = models.ForeignKey(Poll, edit_inline=models.TABULAR, num_in_admin=3)
    choice = models.CharField(maxlength=200, core=True)
    votes = models.IntegerField(core=True)
    def __str__(self):
        return self.choice
    class Admin:
        pass

class Geolocation(models.Model):
    lat = models.FloatField(max_digits=12, decimal_places=6)
    lon = models.FloatField(max_digits=12, decimal_places=6)
    waypoint = models.CharField(maxlength=765)
    description = models.CharField(maxlength=765)
    foto = models.CharField(blank=True, maxlength=765)
    url = models.CharField(blank=True, maxlength=765)
    date = models.DateTimeField(null=True, blank=True)
    elevation = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    source = models.CharField(blank=True, maxlength=765)
    def __str__(self):
        return self.waypoint
    class Meta:
        db_table = 'geolocations'
    class Admin:
        pass
