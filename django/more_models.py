# This is an auto-generated Django model module.
# You'll have to do the following manually to clean this up:
#     * Rearrange models' order
#     * Make sure each model has one field with primary_key=True
# Feel free to rename the models, but don't rename db_table values or field names.
#
# Also note: You'll have to insert the output of 'django-admin.py sqlinitialdata [appname]'
# into your database.

from django.db import models

class Mysqliciou(models.Model):
    tag = models.CharField(primary_key=True, maxlength=765)
    lastupdate = models.DateTimeField(null=True, blank=True)
    class Meta:
        db_table = 'MySQLicious'

class Ancientexpense(models.Model):
    id = models.IntegerField(primary_key=True)
    date = models.DateField(null=True, blank=True)
    num = models.IntegerField(null=True, blank=True)
    type = models.CharField(blank=True, maxlength=765)
    transaction = models.CharField(blank=True, maxlength=765)
    payDebit = models.FloatField(null=True, max_digits=14, decimal_places=5, blank=True)
    depCredit = models.FloatField(null=True, max_digits=14, decimal_places=5, blank=True)
    account = models.CharField(blank=True, maxlength=765)
    buspurpose = models.CharField(blank=True, maxlength=765)
    class Meta:
        db_table = 'ancientExpenses'

class AvgPopPerSett(models.Model):
    id = models.IntegerField(primary_key=True)
    survey = models.CharField(maxlength=765)
    description = models.CharField(maxlength=765)
    E E F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L E F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E M F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L M F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E  L F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L L F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    T F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E Cla = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L Cla = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    Epicl = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E Post = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L Post = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    class Meta:
        db_table = 'avg_pop_per_sett'

class AvgSettArea(models.Model):
    id = models.IntegerField(primary_key=True)
    survey = models.CharField(maxlength=765)
    description = models.CharField(maxlength=765)
    E E F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L E F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E M F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L M F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E  L F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L L F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    T F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E Cla = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L Cla = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    Epicl = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E Post = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L Post = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    class Meta:
        db_table = 'avg_sett_area'

class BallcourtCount(models.Model):
    id = models.IntegerField(primary_key=True)
    survey = models.CharField(maxlength=765)
    description = models.CharField(maxlength=765)
    E E F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L E F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E M F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L M F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E  L F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L L F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    T F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E Cla = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L Cla = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    Epicl = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E Post = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L Post = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    class Meta:
        db_table = 'ballcourt_count'

class Ccaindex(models.Model):
    id = models.IntegerField(primary_key=True)
    survey = models.CharField(maxlength=765)
    description = models.CharField(maxlength=765)
    E E F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L E F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E M F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L M F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E  L F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L L F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    T F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E Cla = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L Cla = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    Epicl = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E Post = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L Post = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    class Meta:
        db_table = 'ccaindex'

class Deliciou(models.Model):
    id = models.IntegerField(primary_key=True)
    url = models.TextField(blank=True)
    description = models.TextField(blank=True)
    extended = models.TextField(blank=True)
    tags = models.TextField(blank=True)
    date = models.DateTimeField(null=True, blank=True)
    hash = models.CharField(blank=True, maxlength=765)
    class Meta:
        db_table = 'delicious'

class Fscript(models.Model):
    id = models.IntegerField(primary_key=True)
    name = models.TextField()
    likes_eggnog = models.TextField()
    class Meta:
        db_table = 'fscript'

class Geolocation(models.Model):
    id = models.IntegerField(primary_key=True)
    lat = models.FloatField(max_digits=12, decimal_places=6)
    lon = models.FloatField(max_digits=12, decimal_places=6)
    waypoint = models.CharField(maxlength=765)
    description = models.CharField(maxlength=765)
    foto = models.CharField(blank=True, maxlength=765)
    url = models.CharField(blank=True, maxlength=765)
    date = models.DateTimeField(null=True, blank=True)
    elevation = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    source = models.CharField(blank=True, maxlength=765)
    class Meta:
        db_table = 'geolocations'

class GoogleGeocode(models.Model):
    id = models.IntegerField(primary_key=True)
    find_location = models.TextField(blank=True)
    label = models.TextField(blank=True)
    class Meta:
        db_table = 'google_geocodes'

class Googlesite(models.Model):
    id = models.IntegerField(primary_key=True)
    lat = models.FloatField(max_digits=12, decimal_places=6)
    lon = models.FloatField(max_digits=12, decimal_places=6)
    waypoint = models.CharField(maxlength=765)
    description = models.CharField(maxlength=765)
    utm_e = models.FloatField(max_digits=20, decimal_places=10)
    utm_n = models.FloatField(max_digits=20, decimal_places=10)
    foto = models.CharField(maxlength=765)
    url = models.CharField(maxlength=765)
    date = models.DateTimeField()
    area = models.FloatField(max_digits=20, decimal_places=10)
    class Meta:
        db_table = 'googlesites'

class Hello(models.Model):
    id = models.IntegerField(primary_key=True)
    Name = models.TextField(blank=True)
    Age = models.IntegerField(null=True, blank=True)
    Eggnog = models.IntegerField(null=True, blank=True)
    Comment = models.TextField(blank=True)
    birthdate = models.DateField(null=True, blank=True)
    class Meta:
        db_table = 'hello'

class MoundCount(models.Model):
    id = models.IntegerField(primary_key=True)
    survey = models.CharField(maxlength=765)
    description = models.CharField(maxlength=765)
    E E F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L E F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E M F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L M F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E  L F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L L F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    T F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E Cla = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L Cla = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    Epicl = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E Post = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L Post = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    class Meta:
        db_table = 'mound_count'

class NatGasUsage(models.Model):
    id = models.IntegerField(primary_key=True)
    billing_date = models.DateField(null=True, blank=True)
    due_date = models.DateField(null=True, blank=True)
    meter_read = models.DateField(null=True, blank=True)
    days = models.IntegerField(null=True, blank=True)
    meter_prev = models.IntegerField(null=True, blank=True)
    meter_present = models.IntegerField(null=True, blank=True)
    therms = models.FloatField(null=True, max_digits=12, decimal_places=31, blank=True)
    thermal_factor = models.FloatField(null=True, max_digits=12, decimal_places=31, blank=True)
    DDDC = models.FloatField(null=True, max_digits=12, decimal_places=31, blank=True)
    price_per_therm = models.FloatField(null=True, max_digits=12, decimal_places=31, blank=True)
    agl_base = models.FloatField(null=True, max_digits=12, decimal_places=31, blank=True)
    class Meta:
        db_table = 'nat_gas_usage'

class PercentPopSetts1000(models.Model):
    id = models.IntegerField(primary_key=True)
    survey = models.CharField(maxlength=765)
    description = models.CharField(maxlength=765)
    E E F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L E F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E M F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L M F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E  L F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L L F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    T F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E Cla = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L Cla = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    Epicl = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E Post = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L Post = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    class Meta:
        db_table = 'percent_pop_setts1000'

class PercentPopTop10Pct(models.Model):
    id = models.IntegerField(primary_key=True)
    survey = models.CharField(maxlength=765)
    description = models.CharField(maxlength=765)
    E E F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L E F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E M F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L M F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E  L F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L L F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    T F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E Cla = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L Cla = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    Epicl = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E Post = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L Post = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    class Meta:
        db_table = 'percent_pop_top10pct'

class PopulationDensity(models.Model):
    id = models.IntegerField(primary_key=True)
    survey = models.CharField(maxlength=765)
    description = models.CharField(maxlength=765)
    E E F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L E F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E M F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L M F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E  L F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L L F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    T F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E Cla = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L Cla = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    Epicl = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E Post = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L Post = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    class Meta:
        db_table = 'population_density'

class Scannedslide(models.Model):
    id = models.IntegerField(primary_key=True)
    roll = models.IntegerField(null=True, blank=True)
    frame = models.IntegerField(null=True, blank=True)
    description = models.TextField(blank=True)
    filename = models.TextField(blank=True)
    date = models.DateField(null=True, blank=True)
    class Meta:
        db_table = 'scannedSlides'

class SettlementDensity(models.Model):
    id = models.IntegerField(primary_key=True)
    survey = models.CharField(maxlength=765)
    description = models.CharField(maxlength=765)
    E E F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L E F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E M F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L M F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E  L F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L L F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    T F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E Cla = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L Cla = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    Epicl = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E Post = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L Post = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    class Meta:
        db_table = 'settlement_density'

class Softwarehardware(models.Model):
    id = models.IntegerField(primary_key=True)
    date = models.DateField(null=True, blank=True)
    payee = models.CharField(blank=True, maxlength=765)
    product = models.CharField(blank=True, maxlength=765)
    category = models.CharField(blank=True, maxlength=765)
    amount = models.FloatField(null=True, max_digits=14, decimal_places=5, blank=True)
    class Meta:
        db_table = 'softwarehardware'

class Surveyindex(models.Model):
    id = models.IntegerField(primary_key=True)
    survey = models.CharField(maxlength=765)
    lat = models.FloatField(max_digits=12, decimal_places=6)
    lon = models.FloatField(max_digits=12, decimal_places=6)
    description = models.CharField(maxlength=765)
    E E F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L E F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E M F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L M F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E  L F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L L F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    T F = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E Cla = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L Cla = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    Epicl = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    E Post = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    L Post = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    SurveyArea = models.FloatField(null=True, max_digits=12, decimal_places=6, blank=True)
    Confidence = models.IntegerField(null=True, blank=True)
    AreaRank = models.IntegerField(null=True, blank=True)
    class Meta:
        db_table = 'surveyindex'

class Tblsitecentroid(models.Model):
    IngSiteID = models.IntegerField(null=True, blank=True)
    SiteNum = models.CharField(blank=True, maxlength=765)
    X = models.FloatField(null=True, max_digits=20, decimal_places=10, blank=True)
    Y = models.FloatField(null=True, max_digits=20, decimal_places=10, blank=True)
    Area = models.FloatField(null=True, max_digits=20, decimal_places=10, blank=True)
    class Meta:
        db_table = 'tblSiteCentroids'

class Trusteduser(models.Model):
    id = models.IntegerField(primary_key=True)
    user = models.CharField(blank=True, maxlength=180)
    pass_field = models.CharField(blank=True, db_column='pass', maxlength=180) # Field renamed because it was a Python reserved word.
    class Meta:
        db_table = 'trustedUsers'

class Tvterm(models.Model):
    id = models.IntegerField(primary_key=True)
    dateEntered = models.DateTimeField()
    word = models.CharField(blank=True, maxlength=765)
    define = models.TextField(blank=True)
    author = models.CharField(blank=True, maxlength=765)
    class Meta:
        db_table = 'tvTerms'

