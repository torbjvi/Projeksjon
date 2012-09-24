<?php
/*
En event består av dette
Beskrivelse
Dato
Sted
Påmeldingsstart
Påmeldingsslutt
Plassbegrensning
Adgangsbeggrensning
Deltakerliste

Hva som trengs:
	Create event
	Retrieve event
	Add person to event
	Remove person to event
	Update event
*/	
class Event
{
	private $id, $date, $place, $description, $signupStart, $signupStop, $yearRestriction, $attendees, $openForEveryOne;

	function __construct($date, $place,$description,$signupStart,
						$signupStop,$yearRestriction, $openForEveryone)
	{
		$this->date = $date;
		$this->place = $place;
		$this->description = $description;
		$this->signupStart = $signupStart;
		$this->signupStop = $signupStop;
		$this->yearRestriction = $yearRestriction;
		$this->openForEveryOne = $openForEveryone;
		
	}
	
	public static function retrieveEvent($eventid)
	{
	}
	public static function retrieveUpcomingEvents($no) {
		//Retreives the specified number of upcomming events
		//If $no equals 0 retrieve all upcomming events.
		
		
	}
	
}
	
?>
