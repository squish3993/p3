<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    
    	public function getNoteValue(Request $request)
    	{ 

    		$noteValues = ['c' => 0, 'd' => 2, 'e' => 4, 'f' => 5, 'g' => 7, 'a' => 9, 'b'=>11];
    		$intervalNames = ['Unison', 'Minor 2nd', 'Major 2nd', 'Minor 3rd', 'Major 3rd', 'Perfect 4th', 'Tri-Tone (Also called Augmented 4th or Diminished 5th)', 'Perfect 5th', 'Minor 6th', 'Major 6th', 'Minor 7th', 'Major 7th', 'Octave', 'Minor 9th', 'Major 9th', 'Minor 10th', 'Major 10th', 'Perfect 11th', 'Augmented 11th or Dimished 12th', 'Perfect 12th', 'Minor 13th', 'Major 13th', 'Minor 14th', 'Major 14th'];

    		$note = strtolower($request->input('note', null));
    		$noteTwo = strtolower($request->input('noteTwo', null));
    		$accidental = $request->input('accidental');
    		$accidentalTwo=$request->input('accidentalTwo');
    		$octave = $request->input('octave');
    		$intervalName = ''; 
			
		
			
			if ($note && $noteTwo)
			{
				$noteValue = $noteValues[$note];
				if ($accidental=='sharp') { #Adds one to the scaler value if the note is sharp
					$noteValue+=1;
				}	elseif ($accidental == 'flat') { #Subtracts one from the scaler value if the note is flat
					$noteValue-=1;
				} 	else {						#keeps the scaler value the same if it is natural
					$noteValue=$noteValue;  
				}
			
				
			
			
				$noteValueTwo = $noteValues[$noteTwo];
				if ($accidentalTwo=='sharp') { #Adds one to the scaler value if the note is sharp
					$noteValueTwo+=1;
				}	elseif ($accidentalTwo == 'flat') { #Subtracts one from the scaler value if the note is flat
					$noteValueTwo-=1;
				} 	else {						#keeps the scaler value the same if it is natural
					$noteValueTwo=$noteValueTwo;  
				}

				

				if (!$octave) 
				{
					$interval = ($noteValueTwo) - ($noteValue);
						if ($interval >= 0) {
							$intervalName = $intervalNames[$interval];
						} else {
							$intervalName = $intervalNames[(12+$interval)];
						}
				} 
				else 
				{
					$interval = (($noteValueTwo)+12) - ($noteValue);
						if ($interval >= 12) {
							$intervalName = $intervalNames[$interval];
						} else {
							$intervalName = $intervalNames[(12+$interval)];
						}
				}

				
			}

			
			
    		return view('note.index')->with([
    			'intervalName' => $intervalName, 
    			'note' => $note,
    			'noteTwo' => $noteTwo
    			]);
    	}
}


