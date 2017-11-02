<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\Validnote;

class NoteController extends Controller
{
    			
	public function getNoteValue(Request $request)
    	{ 
    			
    		#Validates request if form is submitted
    		#Fields are required and must be a valid note
    		if ($request->has('note'))
    		{
				$this->validate($request, [
				'note'=> ['required', new Validnote],
				'noteTwo'=> ['required', new Validnote]
    		]);
    		}

    		#Stores incoming data in variables
    		$note = strtolower($request->input('note', null));
    		$noteTwo = strtolower($request->input('noteTwo', null));
    		$accidental = $request->input('accidental');
    		$accidentalTwo = $request->input('accidentalTwo');
    		$octave = $request->input('octave');
    		$intervalName = ''; 
    		
    		#Array's for calculating the interval
    		$noteValues = ['c' => 0, 'd' => 2, 'e' => 4, 'f' => 5, 'g' => 7, 'a' => 9, 'b'=>11];
    		$intervalNames = ['Unison', 'Minor 2nd', 'Major 2nd', 'Minor 3rd', 'Major 3rd', 'Perfect 4th', 'Tri-Tone (Also called Augmented 4th or Diminished 5th)', 'Perfect 5th', 'Minor 6th', 'Major 6th', 'Minor 7th', 'Major 7th', 'Octave', 'Minor 9th', 'Major 9th', 'Minor 10th', 'Major 10th', 'Perfect 11th', 'Augmented 11th or Dimished 12th', 'Perfect 12th', 'Minor 13th', 'Major 13th', 'Minor 14th', 'Major 14th'];


			if ($note && $noteTwo)
			{	
				
				$noteValue = $noteValues[$note];
				if ($accidental=='sharp') #Adds one to the scaler value if the note is sharp
				{ 
					$noteValue+=1;
				}	elseif ($accidental == 'flat') #Subtracts one from the scaler value if the note is flat
				{ 
					$noteValue-=1;
				} 	else #keeps the scaler value the same if it is natural
				{	
					$noteValue=$noteValue;  
				}
			
				
			
			
				$noteValueTwo = $noteValues[$noteTwo];
				if ($accidentalTwo=='sharp') #Adds one to the scaler value if the note is sharp
				{ 
					$noteValueTwo+=1;
				}	elseif ($accidentalTwo == 'flat') #Subtracts one from the scaler value if the note is flat
				{ 
					$noteValueTwo-=1;
				} 	else #keeps the scaler value the same if it is natural
				{						
					$noteValueTwo=$noteValueTwo;  
				}

				

				#Calculates the interval with or without octave jump
				if (!$octave) 
				{
					$interval = ($noteValueTwo) - ($noteValue);
						if ($interval >= 0) 
						{
							$intervalName = $intervalNames[$interval];
						} else 
						{
							$intervalName = $intervalNames[(12+$interval)];
						}
				} 
				else 
				{
					$interval = (($noteValueTwo)+12) - ($noteValue);
						if ($interval >= 12) 
						{
							$intervalName = $intervalNames[$interval];
						} else 
						{
							$intervalName = $intervalNames[(12+$interval)];
						}
				}

				
			}

			
			
    		return view('note.index')->with([
    			'intervalName' => $intervalName, 
    			'note' => strtoupper($note),
    			'noteTwo' => strtoupper($noteTwo),
    			'accidental' => $accidental,
    			'accidentalTwo' => $accidentalTwo
    			]);
    		}
    		
    	


	
} #eoc


