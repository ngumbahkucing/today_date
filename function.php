function is_today($str)
{
  $timestamp = $str;
  $today = new DateTime("today");
  $match_date = DateTime::createFromFormat( "Y-m-d", $timestamp );
  $match_date->setTime( 0, 0, 0 );
  $diff = $today->diff( $match_date );
  $diffDays = (integer)$diff->format( "%R%a" ); // Extract days count in interval

  if ($diffDays != 0)
  {
    echo "not today";
  }
}
