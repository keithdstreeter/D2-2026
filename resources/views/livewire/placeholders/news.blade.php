{{-- <div>
    <div class="space-y-4">
        @for($i = 0; $i < 5; $i++)
            <div class="rounded-lg border border-zinc-200 dark:border-zinc-800 bg-white dark:bg-zinc-800 overflow-hidden animate-pulse">
                <div class="w-full h-48 bg-zinc-200 dark:bg-zinc-700"></div>
                <div class="p-4 space-y-3">
                    <div class="h-5 bg-zinc-200 dark:bg-zinc-700 rounded w-3/4"></div>
                    <div class="space-y-2">
                        <div class="h-4 bg-zinc-200 dark:bg-zinc-700 rounded"></div>
                        <div class="h-4 bg-zinc-200 dark:bg-zinc-700 rounded w-5/6"></div>
                    </div>
                    <div class="h-3 bg-zinc-200 dark:bg-zinc-700 rounded w-24"></div>
                </div>
            </div>
        @endfor
    </div>
</div> --}}

<!--
Source - https://stackoverflow.com/a
Posted by Anton, modified by community. See post 'Timeline' for change history
Retrieved 2026-01-28, License - CC BY-SA 4.0
-->

<table class="table-auto w-full shadow-md mt-5 rounded bg-black border-separate border-spacing-y-1">
  <thead class="text-left text-orange-500 tracking-wider sticky">
    <tr>
      <th class="p-4">Action</th>
      <th class="p-4">Description</th>
      <th class="p-4">Distance</th>
      
    </tr>
  </thead>
  <tbody class="">
   
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Start</td> <td class='p-4'>Start of route</td> <td class='p-4'>0</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>Head South on Mill Village Rd (LEFT out of main D2R2 field)</td> <td class='p-4'>0.01</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>Turn right onto Stillwater Rd</td> <td class='p-4'>0.9</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>RIGHT onto Hoosac Rd (which soon turns to dirt)</td> <td class='p-4'>2.25</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>T-intersection, RIGHT onto Mathews Rd</td> <td class='p-4'>4.27</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>RIGHT onto Boyden Rd (tiny driveway-sized road; the sign is 100 ft. past turn)</td> <td class='p-4'>4.53</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>T-intersection, RIGHT onto Graves Rd (no sign)</td> <td class='p-4'>5.58</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>T-intersection RIGHT onto Reeds Bridge Rd</td> <td class='p-4'>6.42</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Straight</td> <td class='p-4'>STRAIGHT across onto Elmer Rd (after little bridge)</td> <td class='p-4'>7.78</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>LEFT onto Newhall Rd (at top of steep little hill)</td> <td class='p-4'>7.99</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>T-intersection, RIGHT onto Shelburne Falls Rd (climb)</td> <td class='p-4'>8.6</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>LEFT onto Pine Hill Rd</td> <td class='p-4'>9.94</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>Bear left to stay on Pine Hill Rd</td> <td class='p-4'>10.11</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>LEFT to stay on Pine Hill Rd (dirt)</td> <td class='p-4'>10.46</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Straight</td> <td class='p-4'>Continue straight, ignore road closure sign</td> <td class='p-4'>11.13</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Danger</td> <td class='p-4'>Pavement: CAUTION: entering "The Bobsled Run" (steep twisty descent near bottom)</td> <td class='p-4'>12.43</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>RIGHT at little grass triangle onto Upper Baptist Hill Rd (no sign)</td> <td class='p-4'>13.03</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>RIGHT onto Ives Rd</td> <td class='p-4'>13.36</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>Left to stay on Ives Rd</td> <td class='p-4'>13.58</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>T-intersection, RIGHT onto Rt.116</td> <td class='p-4'>13.76</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>LEFT onto Burkeville Covered Brodge</td> <td class='p-4'>13.85</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Slight Right</td> <td class='p-4'>Stay right off bridge on Main Poland Rd (steep climb begins soon)</td> <td class='p-4'>13.89</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Danger</td> <td class='p-4'>Summit, through cut in bedrock, "Poland Gate". CAUTION: the downhill is often rocky washboard.</td> <td class='p-4'>15.47</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>RIGHT onto North Poland Rd</td> <td class='p-4'>16.72</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>LEFT onto Bullitt Rd, dirt (no sign, just past driveway #536). CAUTION: possibly washout.</td> <td class='p-4'>17.66</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Straight</td> <td class='p-4'>STRAIGHT across Rt 116 onto Murray Rd (little dirt lane)</td> <td class='p-4'>18.66</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>LEFT at end of lane onto Hill Rd (no sign)</td> <td class='p-4'>18.87</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>Fork left onto Burton Hill Rd</td> <td class='p-4'>19.05</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Straight</td> <td class='p-4'>STRAIGHT across Rt 116 onto Creamery Rd (through grassy triangle)</td> <td class='p-4'>19.26</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>T-intersection, LEFT onto Norton Hill Rd (no sign)</td> <td class='p-4'>21.08</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>Quick fork RIGHT at triangle onto Steady Lane (sign only for Norton Hill)</td> <td class='p-4'>21.14</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Water</td> <td class='p-4'>Snacks & water at Steady Lane Farm on left, Open 7:00-10:00 Park bikes off road!</td> <td class='p-4'>21.27</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Straight</td> <td class='p-4'>STRAIGHT across Rt 112 onto Lilliput Rd, dirt (no sign)</td> <td class='p-4'>21.53</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>T-intersection, RIGHT onto Bug Hill Rd (no sign)</td> <td class='p-4'>22.21</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Straight</td> <td class='p-4'>Continue straight: CAUTION: this intersection has no stop signs in any direction</td> <td class='p-4'>24.29</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>RIGHT onto Old Stage Rd</td> <td class='p-4'>24.88</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>Bear LEFT onto Hawley Rd (becomes Ashfield Rd 200 yds later at Hawley town line)</td> <td class='p-4'>26.15</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>T-intersection, RIGHT onto Plainfield Rd</td> <td class='p-4'>27.31</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>Right onto Buckland Rd</td> <td class='p-4'>27.49</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>LEFT onto Pond Rd</td> <td class='p-4'>28.16</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>T-intersection, LEFT onto Forget Rd</td> <td class='p-4'>29.04</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>Heads up! RIGHT at phone pole onto little jeep track - this is actually East Rd</td> <td class='p-4'>29.45</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>T-intersection, left to stay on East Rd</td> <td class='p-4'>30.19</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	"<td class='p-4'>Danger</td> <td class='p-4'>CAUTION: steep, narrow downhill with patches of rutted, stony, washboard and surprise traffic. 
Don't leave your water bottles here.</td> <td class='p-4'>30.21</td>"
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Sharp Right</td> <td class='p-4'>Hard RIGHT downhill turn after little bridge, still East Rd</td> <td class='p-4'>32.04</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>Merge right onto East Hawley Rd. Pavement resumes. CAUTION: cars from left. No sign.</td> <td class='p-4'>32.64</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>T-intersection, LEFT onto South River Rd</td> <td class='p-4'>33.35</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>RIGHT, cross RR tracks onto Rt 8A</td> <td class='p-4'>33.45</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>RIGHT onto Route 2; please stay single file for next mile through town</td> <td class='p-4'>33.56</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>LEFT Route 8A - note Neighbor's Store before corner</td> <td class='p-4'>34.2</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>Bear left onto Bissell Covered Bridge to stay on Rt 8A</td> <td class='p-4'>34.46</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>RIGHT onto Mountain Rd; 15% climb next 3/4 mile</td> <td class='p-4'>35.35</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>LEFT onto South Heath Rd; paved, super steep, becomes South Rd at Heath town line</td> <td class='p-4'>36.35</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>T-intersection: LEFT onto Town Farm Rd</td> <td class='p-4'>37.33</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>4-way intersection: LEFT on South Rd across from Bassett Rd</td> <td class='p-4'>37.83</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Straight</td> <td class='p-4'>Fork STRAIGHT (or LEFT) onto Royer Rd (dirt)</td> <td class='p-4'>37.98</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Straight</td> <td class='p-4'>Continue straight - road becomes gnarly</td> <td class='p-4'>38.17</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Water</td> <td class='p-4'>Snacks & water: 60 Royer Rd, Heath. Open 8:15-12:00</td> <td class='p-4'>38.77</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>T-intersection at bottom of descent, RIGHT onto Dell Rd (pavement, no sign) which becomes W. Main St</td> <td class='p-4'>39.29</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Straight</td> <td class='p-4'>Straight through center of town</td> <td class='p-4'>39.94</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Straight</td> <td class='p-4'>Continue STRAIGHT onto E. Main St</td> <td class='p-4'>40.03</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Straight</td> <td class='p-4'>Stay STRAIGHT (or LEFT) onto Taylor Brook Rd (dirt)</td> <td class='p-4'>40.25</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Straight</td> <td class='p-4'>Straight through 4-way intersection; note pond on left 200 yds later</td> <td class='p-4'>41.2</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Straight</td> <td class='p-4'>Road turns to pavement and becomes Heath Rd at Colrain town line</td> <td class='p-4'>42.45</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>LEFT onto Maxam Rd - don't miss this turn</td> <td class='p-4'>43.49</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>Stay to the left (still Maxam Rd)</td> <td class='p-4'>43.93</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>T-intersection; LEFT onto Adamsville Rd (catch your breath)</td> <td class='p-4'>44.51</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>Slight LEFT onto Archambo Rd (becomes extremely steep)</td> <td class='p-4'>44.62</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>T-intersection, RIGHT onto White Rd</td> <td class='p-4'>45.51</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>T-intersection, RIGHT onto Adamsville Rd</td> <td class='p-4'>45.61</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>Immediate LEFT onto Hillman Rd. (dirt, no sign). Hard climb, arguably the hardest climb on the course</td> <td class='p-4'>45.66</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>T-intersection, LEFT onto Wilson Hill Rd</td> <td class='p-4'>47.3</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>T-intersection, RIGHT onto Christian Hill Rd (no sign)</td> <td class='p-4'>48.14</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>Downhill T-intersection, RIGHT onto Thompson Rd (long downhill)</td> <td class='p-4'>48.37</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>T-intersection, RIGHT onto Route 112 S (Jacksonville Rd)</td> <td class='p-4'>50.27</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>LEFT onto Franklin Hill Rd</td> <td class='p-4'>51.5</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>Left after bridge onto tiny dirt lane (still Franklin Hill Rd)</td> <td class='p-4'>51.65</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>Bear left past rock walls (straight ahead is a jeep track)</td> <td class='p-4'>53</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>Downhill T-intersection, LEFT onto Amidon Rd (no sign)</td> <td class='p-4'>53.8</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Straight</td> <td class='p-4'>Stay straight, note sign for Amidon Rd</td> <td class='p-4'>55.16</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>LEFT onto Jacksonville Stage Rd. Sign is hard to see, but visible looking back</td> <td class='p-4'>55.57</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>Stay left, still on Jacksonville Stage Rd</td> <td class='p-4'>57.12</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	"<td class='p-4'>Right</td> <td class='p-4'>RIGHT onto Old County Rd. 
Note that the routes diverge. Don't follow riders straight.</td> <td class='p-4'>58.01</td>"
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>RIGHT onto Deer Park Rd (no sign)</td> <td class='p-4'>58.64</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Danger</td> <td class='p-4'>CAUTION Freshly graded surface for next 4.1 miles. Reduce speed on downhills and in corners.</td> <td class='p-4'>58.65</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>Bear right at bottom of hill, still on Deer Park Rd</td> <td class='p-4'>61.33</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>Stay left (at Josh Rd), still on Deer Park Rd</td> <td class='p-4'>62.45</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Danger</td> <td class='p-4'>CAUTION: Hard left bend onto wooden bridge</td> <td class='p-4'>62.72</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>T-intersection, RIGHT onto Hinesburg / Green River Rd</td> <td class='p-4'>62.75</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>RIGHT onto Green River Rd</td> <td class='p-4'>63.83</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>Slight right to stay on Green River Rd</td> <td class='p-4'>65.76</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>Turn right onto Jacksonville Stage Rd/‚ÄãStage Rd and head through covered bridge</td> <td class='p-4'>65.79</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Food</td> <td class='p-4'>LUNCH at Green River Crib Dam on right. After lunch go back through covered bridge, continue straight on Jacksonville Stage Rd.</td> <td class='p-4'>65.83</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>T-intersection, RIGHT onto Sweet Pond Rd (intersection is paved)</td> <td class='p-4'>68.32</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>Sweet Pond Rd bends right up sharp hill (at Potash Rd)</td> <td class='p-4'>69.52</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>Stay to the left (at Abijah Prince Rd)</td> <td class='p-4'>70.4</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>Fork to the right, still on Sweet Pond Rd</td> <td class='p-4'>72.69</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Straight</td> <td class='p-4'>Cross pavement onto Keet's Brook Rd</td> <td class='p-4'>72.98</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>RIGHT onto Simon Keet's Rd (bridge)</td> <td class='p-4'>73.97</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Straight</td> <td class='p-4'>Merge left onto Brattleboro Rd (pavement)</td> <td class='p-4'>74.5</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>RIGHT onto Greenfield Rd</td> <td class='p-4'>74.65</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>RIGHT onto Alexander Rd</td> <td class='p-4'>74.86</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>Top of climb, LEFT onto North County Rd</td> <td class='p-4'>76.28</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>T-intersection, RIGHT onto West Leyden Rd. Caution, twisty high-speed descent. Sign visible over your shoulder.</td> <td class='p-4'>78.36</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	"<td class='p-4'>Left</td> <td class='p-4'>T-intersection, LEFT onto Green River Rd., dirt (no sign)
Note optional water stop to the right, just after taking a right on North Green River Rd</td> <td class='p-4'>80.43</td>"
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	"<td class='p-4'>Right</td> <td class='p-4'>Hairpin RIGHT onto Nelson Rd (no other turns are close).
Note that the routes diverge. Don't follow riders straight past this turn.</td> <td class='p-4'>84.42</td>"
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>T-intersection, LEFT onto East Colrain Rd (no sign)</td> <td class='p-4'>85.71</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	"<td class='p-4'>Right</td> <td class='p-4'>T-intersection, RIGHT at major power line onto Van Nuys Rd., paved (no sign)
Note that routes diverge. Don't follow riders left down Van Nuys Rd.</td> <td class='p-4'>86.89</td>"
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>T-intersection at bottom of hill, LEFT onto Shelburne Line Rd</td> <td class='p-4'>88.43</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>RIGHT onto Jurek Rd (no sign, look for faded red barns on left after making turn)</td> <td class='p-4'>88.9</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>RIGHT onto Greenfield Rd (double-yellow line). CAUTION: steep descent.</td> <td class='p-4'>89.83</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Danger</td> <td class='p-4'>Caution: at bottom of descent - blind oncoming traffic behind church</td> <td class='p-4'>90.51</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>LEFT onto Rt 112 South</td> <td class='p-4'>91.44</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>Stay left to remain on Route 112</td> <td class='p-4'>92.17</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Food</td> <td class='p-4'>Catamount store on right - good place to stop if you're bonking</td> <td class='p-4'>92.46</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>RIGHT onto Lyonsville Rd - cross Colrain Covered Bridge</td> <td class='p-4'>92.67</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>Bear LEFT at end of street (top of steep little rise) onto Foundry Village Rd</td> <td class='p-4'>92.89</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>LEFT just after cemetery onto Adamsville Rd</td> <td class='p-4'>93.16</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>RIGHT after green iron bridge back onto Route 112 South</td> <td class='p-4'>94.04</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>Fork LEFT before bridge onto Call Rd</td> <td class='p-4'>94.34</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>LEFT onto Patten Hill Rd at triangle (sign is 60 ft later, on other fork of road) - big climb</td> <td class='p-4'>96.04</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Water</td> <td class='p-4'>Snacks & water at the Little Big House Gallery. Opens: 12:00; closes 6:00</td> <td class='p-4'>97.87</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>Continue south on Patten Hill Rd</td> <td class='p-4'>97.88</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>RIGHT onto Square Lot Rd (tiny tree-lined lane, no sign)</td> <td class='p-4'>98.38</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>T-intersection, RIGHT onto Tower Rd, paved (no sign)</td> <td class='p-4'>98.74</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>Bear LEFT onto Cooper Lane (sign only for Tower Rd)</td> <td class='p-4'>98.88</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Danger</td> <td class='p-4'>Pavement at bottom of long descent: CAUTION: full stop coming up</td> <td class='p-4'>100.7</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>T-intersection, LEFT; Caution: limited sight distance on left</td> <td class='p-4'>100.83</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Straight</td> <td class='p-4'>STRAIGHT across Rt 2 onto Shelburne Center Rd (Caution: 55 mph traffic)</td> <td class='p-4'>100.95</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>Quick RIGHT onto Barnard Rd</td> <td class='p-4'>101.7</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>Quick LEFT onto Allen Rd</td> <td class='p-4'>101.75</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>T-intersection at bottom of steep hill, go RIGHT onto Bardwell's Ferry Rd</td> <td class='p-4'>101.95</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>Immediate LEFT at brick house onto South Shelburne Rd</td> <td class='p-4'>101.98</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	"<td class='p-4'>Straight</td> <td class='p-4'>Straight through 4-way intersection. Note that routes
 diverges, don't follow riders onto Zerah Fiske Rd.</td> <td class='p-4'>103.15</td>"
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>RIGHT onto Taylor Rd at bottom of hill - don't miss this turn</td> <td class='p-4'>104.01</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>LEFT onto Hawk's Rd (underneath power lines) Ignore "Road Closed" sign. Road open to bikes. Riders rejoin others to finish</td> <td class='p-4'>105.77</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Straight</td> <td class='p-4'>Continue straight at driveway</td> <td class='p-4'>106.33</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Danger</td> <td class='p-4'>CAUTION: Road turns to dirt at bottom of hill and becomes rough and rocky with major gullies from recent rain!</td> <td class='p-4'>106.54</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>Bear right, staying on pavement</td> <td class='p-4'>108.34</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Right</td> <td class='p-4'>Bottom of sharp hill, RIGHT onto Upper Rd (no sign) - Dangerous intersection!</td> <td class='p-4'>108.51</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>T-intersection after concrete bridge, LEFT onto Stillwater Rd</td> <td class='p-4'>109.52</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>Left</td> <td class='p-4'>Turn left onto Mill Village Rd</td> <td class='p-4'>110.45</td>
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	"<td class='p-4'>Sprint</td> <td class='p-4'>FINISH
Be sure to check in at registration tent. Open 12:30-8:00</td> <td class='p-4'>111.35</td>"
<tr class="bg-card rounded text-gray-200 bg-neutral-900">	<td class='p-4'>End</td> <td class='p-4'>End of route</td> <td class='p-4'>111.35</td>
</tbody>
</table>