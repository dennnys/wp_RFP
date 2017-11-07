<style>
	.wrapper {
		margin: 0;
		width: 100%;
		max-width: 100%;
	}
</style>
<div id="rfp-wrap">
	<div id="rfp_message">
		<?php 
			if(isset($_SESSION['rfp_succes'])) {
		?>
		<div id="rfp_succes">
			<span><?= $_SESSION['rfp_succes'] ?></span>
			<span class="x_close"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
		</div>
		<?php unset($_SESSION['rfp_succes']); } ?>
		<?php 
			if(isset($_SESSION['rfp_error'])) {
		?>
		<div id="rfp_error">
			<span><?= $_SESSION['rfp_error'] ?></span>
			<span class="x_close"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
		</div>
		<?php unset($_SESSION['rfp_error']); } ?>
	</div>
	<section id="rfp-page">
		<div id="rfp-title-page">
			Quick and easy proposal request
		</div>
		<div id="rfp-subtitle-page" class="text-claire">
			Fill out our short template to let us know your influencer marketing needs in as much detail as possible. The more the better! This helps us help you in the most efficient and fastest way possible.
		</div>
	</section>
	<section id="rfp-breadcrumbs">
		<div id="load"></div>
	</section>
	<section id="rfp-container">
			<form method="POST" id="rfp_form">
	<div pos="0" class="page">
			<div class="tab">
				<div class="question">
					<div class="h">What’s the goal? *</div>
					<p>Branded content for your social media accounts? Website? Or to prompt influencers to promote your brand through their own channel? Maybe somewhere in between?</p>
				</div>
				<div class="answer">
					<div class="radio">
						<input type="radio" value="Branded Content" id="q01_1" name="q01">
						<label class="radio1" for="q01_1">
							<div>
								<div>Branded Content</div>
								<div>Influencers will create custom content for you to post</div>
								<i class="fa fa-check-square" aria-hidden="true"></i>
							</div>
						</label>
						<input type="radio" value="Influencer Collaborations" id="q01_2" name="q01">
						<label class="radio1" for="q01_2"><div>
							<div>Influencer Collaborations</div>
							<div>Influencers will create content and post it to their organic following</div>
							<i class="fa fa-check-square" aria-hidden="true"></i>
						</div></label>
						<input type="radio" value="Branded Content + Influencer Collaborations" id="q01_3" name="q01">
						<label class="radio1" for="q01_3">
							<div>
								<div>Branded Content + Influencer Collaborations</div>
								<div>Influencers will create custom content in bulk and post a selection to their following.</div>
								<i class="fa fa-check-square" aria-hidden="true"></i>
						</div>
						</label>
					</div>
				</div>
			</div> <!-- end tab -->
			<div class="end"></div>
			<div class="tab">
				<div class="question">
					<div class="h">Campaign Name</div>
					<p></p>
				</div>
				<div class="answer">
					<div class="">
						<div class="text-bold">
							What should we call your campaign? *
						</div>
						<input id="q02" class="input-text" type="text" name="q02">
						<div class="text-claire">
						</div>
					</div>
				</div>
			</div> <!-- end tab -->
			<div class="end"></div>
			<div class="tab">
				<div class="question">
					<div class="h">Proposal Deadline</div>
					<p></p>
				</div>
				<div class="answer">
					<div class="">
						<div class="text-bold">
							When did you want to catch up and discuss the details? *
						</div>
						<input id="q03" class="input-text" type="date" name="q03">
						<div class="text-claire">
						</div>
					</div>
				</div>
			</div> <!-- end tab -->
		</div> <!-- end page -->
		<div pos="1" class="page">
			<div class="tab">
				<div class="question">
					<div class="h">Brand Details</div>
					<p></p>
				</div>
				<div class="answer">
					<div class="">
						<div class="text-bold">
							Name of the brand being promoted? *
						</div>
						<input id="q11" name="q11" class="input-text" type="text">
						<div class="text-bold">
							Give us some juicy details about your brands personality.
						</div>
						<textarea name="q12" class="input-textarea"></textarea>
						<div class="text-claire">
							What makes you special and why should influencers get involved?
						</div>
					</div>
				</div>
			</div> <!-- end tab -->
			<div class="end"></div>
			<div class="tab">
				<div class="question">
					<div class="h">The Brand's Marketing Challenge</div>
					<p>If this campaign accomplishes one main goal, what would you want that to be?</p>
				</div>
				<div class="answer">
					<div class="">
						<div class="text-bold">
							What is the primary marketing challenge the brand is trying to overcome?
						</div>
						<textarea name="q13" class="input-textarea"></textarea>
						<div class="text-claire">
							e.g. Our challenge is convincing Gen Z'ers and young millennials that Nike shoes should be the go-to shoe brand for lifestyle wear — not just the gym and sports.
						</div>
					</div>
				</div>
			</div> <!-- end tab -->
			<div class="end"></div>
			<div class="tab">
				<div class="question">
					<div class="h">Competitors</div>
					<p>If we know who your competitors are, we can audit their social channels, and provide personalized recommendations as to how you can best position yourself.</p>
				</div>
				<div class="answer">
					<div class="">
						<div class="text-bold">
							Who are your major competitors in market?
						</div>
						<input id="q14" name="q14" class="input-text" type="text">
						<div class="text-bold">
							What differentiates you from your competitors?
						</div>
						<textarea name="q15" class="input-textarea"></textarea>
						<div class="text-claire">
							e.g. Our brand aims to provide inspiration and innovation for every athlete in the world, whether you’re a professional athlete or amateur.
						</div>
					</div>
				</div>
			</div> <!-- end tab -->
	<!--		<div class="end"></div>
			<div class="tab">
				<div class="question">
					<div class="h">Exclusivity</div>
					<p>You may not want influencers you work with to collaborate with other competing brands. We can facilitate exclusivity agreements to ensure the influencers you work with don’t work with other brands in your product category.</p>
				</div>
				<div class="answer">
					<div class="radio">
						<input class="radio2" type="radio" id="q16_1" name="q16" value="30 days">
						<label for="q16_1">
							<div>
								<div>30 days ($)</div>
								<div>Influencers will not post about competing brands for 30 days before and after my campaign</div>
								<i class="fa fa-check-square" aria-hidden="true"></i>
							</div>
						</label>
						<input class="radio2" type="radio" id="q16_2" name="q16" value="90 days">
						<label for="q16_2"><div>
							<div>90 days ($$)</div>
							<div>Influencers will not post about competing brands for 30 days before and after my campaign</div>
							<i class="fa fa-check-square" aria-hidden="true"></i>
						</div></label>
						<input class="radio2" type="radio" id="q16_3" name="q16" value="180 days">
						<label for="q16_3">
							<div>
								<div>180 days ($$$)</div>
								<div>Influencers will not post about competing brands for 30 days before and after my campaign</div>
								<i class="fa fa-check-square" aria-hidden="true"></i>
						</div>
						</label>
						<input class="radio2" type="radio" id="q16_4" name="q16" value="365 days">
						<label for="q16_4">
							<div>
								<div>365 days ($$$$)</div>
								<div>Influencers will not post about competing brands for 30 days before and after my campaign</div>
								<i class="fa fa-check-square" aria-hidden="true"></i>
						</div>
						</label>
						<input class="radio2" type="radio" id="q16_5" name="q16" value="Other">
						<label for="q16_5">
							<div>
								<div>Other</div>
								<div>Influencers will not post about competing brands for 30 days before and after my campaign</div>
								<i class="fa fa-check-square" aria-hidden="true"></i>
						</div>
						</label>

					</div>
				</div>
			</div>  end tab -->
		</div> <!-- end page -->
		<div pos="2" class="page">
			<div class="tab">
				<div class="question">
					<div class="h">Objectives</div>
					<p>What is the primary goal you are trying to achieve?</p>
				</div>
				<div class="answer">
					<div class="radio">
						<input type="radio" id="q21_1" name="q21" value="Reach">
						<label for="q21_1">
							<div>
								<div>Reach</div>
								<div>I would like my brand in front of as many people as possible</div>
								<i class="fa fa-check-square" aria-hidden="true"></i>
							</div>
						</label>
						<input type="radio" id="q21_2" name="q21" value="Engagement">
						<label for="q21_2"><div>
							<div>Engagement</div>
							<div>I would like as many people as possible to engage with my brand</div>
							<i class="fa fa-check-square" aria-hidden="true"></i>
						</div></label>
						<input type="radio" id="q21_3" name="q21" value="Other">
						<label for="q21_3">
							<div>
								<div>Other</div>
								<div>I would like to make a special request</div>
								<i class="fa fa-check-square" aria-hidden="true"></i>
						</div>
						</label>
					</div>
				</div>
			</div> <!-- end tab -->
			<div class="end"></div>
			<div class="tab">
				<div class="question">
					<div class="h">The Campaign</div>
					<p></p>
				</div>
				<div class="answer">
					<div class="">
						<div class="text-bold">
							What message are you trying to get across? Is this campaign a small piece of a bigger puzzle? Let us know!
						</div>
						<textarea name="q22" class="input-textarea"></textarea>
						<div class="text-claire">
						</div>
					</div>
					<div class="">
						<div class="text-bold">
							Would you like to include a clear Call to Action (CTA)?
						</div>
						<textarea name="q23" class="input-textarea"></textarea>
						<div class="text-claire">e.g. Share this post, try this product, use this hashtag, click the link in bio
						</div>
					</div>
				</div>
			</div> <!-- end tab -->
			<div class="end"></div>
			<div class="tab">
				<div class="question">
					<div class="h">Content Deadline</div>
					<p></p>
				</div>
				<div class="answer">
					<div class="">
						<div class="text-bold">
							How long do we have to get you what you want?
						</div>
						<input class="input-text" type="date" name="q24">
						<div class="text-claire">
						</div>
					</div>
				</div>
			</div> <!-- end tab -->
			<div class="end"></div>
			<div class="tab">
				<div class="question">
					<div class="h">Flight Dates</div>
					<p></p>
				</div>
				<div class="answer">
					<div class="collone2">
						<div class="col_left">
							<div class="text-bold">
								Start date
							</div>
							<input class="input-text" type="date" name="q25">
							<div class="text-claire">
								When would you like your first post to go live?
							</div>
						</div>
						<div class="col_right">
							<div class="text-bold">
								End date
							</div>
							<input class="input-text" type="date" name="q26">
							<div class="text-claire">
								When should the final post go live?
							</div>
						</div>
					</div>

				</div>
			</div> <!-- end tab -->
		</div> <!-- end page -->
		<div pos="3" class="page">
			<?php $img =  plugins_url().'/rfp/img/inspires/'; ?>
			<div class="tab">
				<div id="inspires">
					<input id="q31" type="checkbox" name="q3[]" value="1.jpg">
					<label for="q31">
							<img src="<?= $img ?>1.jpg" alt="">
							<span><i class="fa fa-check-square" aria-hidden="true"></i></span>
					</label>
					<input id="q32" type="checkbox" name="q3[]" value="2.jpg">
					<label for="q32">
							<img src="<?= $img ?>2.jpg" alt="">
							<span><i class="fa fa-check-square" aria-hidden="true"></i></span>
					</label>
					<input id="q33" type="checkbox" name="q3[]" value="3.jpg">
					<label for="q33">
							<img src="<?= $img ?>3.jpg" alt="">
							<span><i class="fa fa-check-square" aria-hidden="true"></i></span>
					</label>
					<input id="q34" type="checkbox" name="q3[]" value="4.jpg">
					<label for="q34">
							<img src="<?= $img ?>4.jpg" alt="">
							<span><i class="fa fa-check-square" aria-hidden="true"></i></span>
					</label>
					<input id="q35" type="checkbox" name="q3[]" value="5.jpg">
					<label for="q35">
							<img src="<?= $img ?>5.jpg" alt="">
							<span><i class="fa fa-check-square" aria-hidden="true"></i></span>
					</label>
					<input id="q36" type="checkbox" name="q3[]" value="6.jpg">
					<label for="q36">
							<img src="<?= $img ?>6.jpg" alt="">
							<span><i class="fa fa-check-square" aria-hidden="true"></i></span>
					</label>
					<input id="q37" type="checkbox" name="q3[]" value="7.jpg">
					<label for="q37">
							<img src="<?= $img ?>7.jpg" alt="">
							<span><i class="fa fa-check-square" aria-hidden="true"></i></span>
					</label>
					<input id="q38" type="checkbox" name="q3[]" value="8.jpg">
					<label for="q38">
							<img src="<?= $img ?>8.jpg" alt="">
							<span><i class="fa fa-check-square" aria-hidden="true"></i></span>
					</label>
					<input id="q39" type="checkbox" name="q3[]" value="9.jpg">
					<label for="q39">
							<img src="<?= $img ?>9.jpg" alt="">
							<span><i class="fa fa-check-square" aria-hidden="true"></i></span>
					</label>
					<input id="q310" type="checkbox" name="q3[]" value="10.jpg">
					<label for="q310">
							<img src="<?= $img ?>10.jpg" alt="">
							<span><i class="fa fa-check-square" aria-hidden="true"></i></span>
					</label>
					<input id="q311" type="checkbox" name="q3[]" value="11.jpg">
					<label for="q311">
							<img src="<?= $img ?>11.jpg" alt="">
							<span><i class="fa fa-check-square" aria-hidden="true"></i></span>
					</label>
					<input id="q312" type="checkbox" name="q3[]" value="12.jpg">
					<label for="q312">
							<img src="<?= $img ?>12.jpg" alt="">
							<span><i class="fa fa-check-square" aria-hidden="true"></i></span>
					</label>
					<input id="q313" type="checkbox" name="q3[]" value="13.jpg">
					<label for="q313">
							<img src="<?= $img ?>13.jpg" alt="">
							<span><i class="fa fa-check-square" aria-hidden="true"></i></span>
					</label>
					<input id="q314" type="checkbox" name="q3[]" value="14.jpg">
					<label for="q314">
							<img src="<?= $img ?>14.jpg" alt="">
							<span><i class="fa fa-check-square" aria-hidden="true"></i></span>
					</label>
					<input id="q315" type="checkbox" name="q3[]" value="15.jpg">
					<label for="q315">
							<img src="<?= $img ?>15.jpg" alt="">
							<span><i class="fa fa-check-square" aria-hidden="true"></i></span>
					</label>
					<input id="q316" type="checkbox" name="q3[]" value="16.jpg">
					<label for="q316">
							<img src="<?= $img ?>16.jpg" alt="">
							<span><i class="fa fa-check-square" aria-hidden="true"></i></span>
					</label>
					<input id="q317" type="checkbox" name="q3[]" value="17.jpg">
					<label for="q317">
							<img src="<?= $img ?>17.jpg" alt="">
							<span><i class="fa fa-check-square" aria-hidden="true"></i></span>
					</label>
					<input id="q318" type="checkbox" name="q3[]" value="18.jpg">
					<label for="q318">
							<img src="<?= $img ?>18.jpg" alt="">
							<span><i class="fa fa-check-square" aria-hidden="true"></i></span>
					</label>
					<input id="q319" type="checkbox" name="q3[]" value="19.jpg">
					<label for="q319">
							<img src="<?= $img ?>19.jpg" alt="">
							<span><i class="fa fa-check-square" aria-hidden="true"></i></span>
					</label>
					<input id="q320" type="checkbox" name="q3[]" value="20.jpg">
					<label for="q320">
							<img src="<?= $img ?>20.jpg" alt="">
							<span><i class="fa fa-check-square" aria-hidden="true"></i></span>
					</label>
					<input id="q321" type="checkbox" name="q3[]" value="21.jpg">
					<label for="q321">
							<img src="<?= $img ?>21.jpg" alt="">
							<span><i class="fa fa-check-square" aria-hidden="true"></i></span>
					</label>
					<input id="q322" type="checkbox" name="q3[]" value="22.jpg">
					<label for="q322">
							<img src="<?= $img ?>22.jpg" alt="">
							<span><i class="fa fa-check-square" aria-hidden="true"></i></span>
					</label>
					<input id="q323" type="checkbox" name="q3[]" value="23.jpg">
					<label for="q323">
							<img src="<?= $img ?>23.jpg" alt="">
							<span><i class="fa fa-check-square" aria-hidden="true"></i></span>
					</label>
					<input id="q324" type="checkbox" name="q3[]" value="24.jpg">
					<label for="q324">
							<img src="<?= $img ?>24.jpg" alt="">
							<span><i class="fa fa-check-square" aria-hidden="true"></i></span>
					</label>
					<input id="q325" type="checkbox" name="q3[]" value="25.jpg">
					<label for="q325">
							<img src="<?= $img ?>25.jpg" alt="">
							<span><i class="fa fa-check-square" aria-hidden="true"></i></span>
					</label>
					<input id="q326" type="checkbox" name="q3[]" value="26.jpg">
					<label for="q326">
							<img src="<?= $img ?>26.jpg" alt="">
							<span><i class="fa fa-check-square" aria-hidden="true"></i></span>
					</label>
					<input id="q327" type="checkbox" name="q3[]" value="27.jpg">
					<label for="q327">
							<img src="<?= $img ?>27.jpg" alt="">
							<span><i class="fa fa-check-square" aria-hidden="true"></i></span>
					</label>

				</div>
			</div> <!-- end tab -->
		</div> <!-- end page -->
		<div pos="4" class="page">
			<div class="tab">
				<div class="question">
					<div class="h">Set your Rules</div>
					<p>What are the must-haves for the campaign. Don’t’ forget, influencers usually know what their audience likes. The longer their leash, the more creativity you are allowing to your campaign.</p>
				</div>
				<div class="answer">
					<div class="">
						<div class="text-bold">
							Influencer DO’s
						</div>
						<textarea name="q41" class="input-textarea"></textarea>
						<br>
						<div class="text-bold">
							Influencer DON’Ts
						</div>
						<textarea name="q42" class="input-textarea"></textarea>
					</div>
				</div>
			</div> <!-- end tab -->
			<div class="end"></div>
			<div class="tab">
				<div class="question">
					<div class="h">Other Requirements</div>
					<p></p>
				</div>
				<div class="answer">
					<div class="">
						<div class="text-bold">
							Are there accounts influencers should tag?
						</div>
						<input class="input-text" type="text" name="q43">
						<div class="text-claire">
							Separate accounts with commas (e.g. @one, @two, @three)
						</div>
					</div>
					<div class="">
						<div class="text-bold">
							Are there hashtags influencers should use?
						</div>
						<input class="input-text" type="text" name="q44">
						<div class="text-claire">
							Separate hashtags with commas (e.g. #one, #two, #three)
						</div>
					</div>
					<div class="">
						<div class="text-bold">
							Is there a link influencers should add to their profile bios?
						</div>
						<input class="input-text" type="text" name="q45">
						<div class="text-claire">
							For campaigns that require clicks to a site, links in bios are generally kept for 24 hours after posting
						</div>
					</div>
				</div>
			</div> <!-- end tab -->
		</div> <!-- end page -->
		<div pos="5" class="page">
			<div class="tab">
				<div class="question">
					<div class="h">Demographics</div>
				</div>
				<div class="answer">
					<div class="text-bold">
						Gender *
					</div>
					<div class="radio">
						<input type="radio" value="Everyone" name="q51" id="q51_1">
						<label class="q51" for="q51_1">
							<div>
								<div>Everyone</div>
								<i class="fa fa-check-square" aria-hidden="true"></i>
							</div>
						</label>
						<input type="radio" value="Male" id="q51_2" name="q51">
						<label class="q51" for="q51_2"><div>
							<div>Male</div>
							<i class="fa fa-check-square" aria-hidden="true"></i>
						</div></label>
						<input type="radio" value="Female" id="q51_3" name="q51">
						<label class="q51" for="q51_3">
							<div>
								<div>Female</div>
								<i class="fa fa-check-square" aria-hidden="true"></i>
						</div>
						</label>
					</div>
					<div class="text-bold">
						Age *
					</div>
					<div class="collone2">
						<div class="col_left">
							<input class="input-text" type="number" name="q52" id="q52" placeholder="min" min="12" max="65">
						</div>
						<div class="col_right">
							<input class=" input-text" type="number" name="q53" id="q53" placeholder="max" min="12" max="65">
						</div>
					</div>
					<div class="text-bold">
						Location *
					</div>
					<input id="q54" class="input-text" type="text" name="q54">
				</div>
			</div> <!-- end tab -->
		</div> <!-- end page -->
		<div pos="6" class="page">
			<div class="tab">
				<div class="question">
					<div class="h">Influencer Collaborations *</div>
				</div>
				<div class="answer">
					<div class="radio">
						<input type="radio" value="Launch" name="q61" id="q61_1">
						<label class="q61" for="q61_1">
							<div>
								<div>Launch</div>
								<div>New to the industry? Let’s get your feet wet</div>
								<i class="fa fa-check-square" aria-hidden="true"></i>
							</div>
						</label>
						<input type="radio" value="Seed" id="q61_2" name="q61">
						<label class="q61" for="q61_2"><div>
							<div>Seed</div>
							<div>Not your first influencer marketing rodeo</div>
							<i class="fa fa-check-square" aria-hidden="true"></i>
						</div></label>
						<input type="radio" value="Growth" id="q61_3" name="q61">
						<label class="q61" for="q61_3">
							<div>
								<div>Growth</div>
								<div>The typical spend for leading brands who want to run a scalable campaign</div>
								<i class="fa fa-check-square" aria-hidden="true"></i>
						</div>
						</label>
						<input type="radio" value="Sustain" id="q61_4" name="q61">
						<label class="q61" for="q61_4">
							<div>
								<div>Sustain</div>
								<div>Customized deliverables and white-glove service for industry heavy hitters</div>
								<i class="fa fa-check-square" aria-hidden="true"></i>
						</div>
						</label>
					</div>
				</div>
			</div> <!-- end tab -->
			<div class="end"></div>
			<div class="tab">
				<div class="question">
					<div class="h">Branded Content *</div>
				</div>
				<div class="answer">
					<div class="radio">
						<input type="radio" value="Launch" name="q62" id="q62_1">
						<label class="q62" for="q62_1">
							<div>
								<div>Launch</div>
								<div>30 pieces of content</div>
								<i class="fa fa-check-square" aria-hidden="true"></i>
							</div>
						</label>
						<input type="radio" value="Seed" id="q62_2" name="q62">
						<label class="q62" for="q62_2"><div>
							<div>Seed</div>
							<div>90 pieces of content</div>
							<i class="fa fa-check-square" aria-hidden="true"></i>
						</div></label>
						<input type="radio" value="Growth" id="q62_3" name="q62">
						<label class="q62" for="q62_3">
							<div>
								<div>Growth</div>
								<div>180 pieces of content</div>
								<i class="fa fa-check-square" aria-hidden="true"></i>
						</div>
						</label>
						<input type="radio" value="Sustain" id="q62_4" name="q62">
						<label class="q62" for="q62_4">
							<div>
								<div>Sustain</div>
								<div>365 pieces of content</div>
								<i class="fa fa-check-square" aria-hidden="true"></i>
						</div>
						</label>
					</div>
				</div>
			</div> <!-- end tab -->
	<!--		<div class="end"></div>
			<div class="tab">
				<div class="question">
					<div class="h">Extended Content Rights</div>
					<p>Every piece of content purchased from us automatically includes the rights to re-post on your owned and operated social channels. We also offer extended rights to leverage your content even further - on any digital or offline medium.</p>
				</div>
				<div class="answer">
					<div class="radio">
						<input type="radio" value="Digital" name="q63" id="q63_1">
						<label class="radio1" for="q63_1">
							<div>
								<div>Digital</div>
								<div>I would like to use influencer content outside of social media in a digital format (i.e. advertising, website, etc.)</div>
								<i class="fa fa-check-square" aria-hidden="true"></i>
							</div>
						</label>
						<input type="radio" value="Offline" id="q63_2" name="q63">
						<label class="radio1" for="q63_2"><div>
							<div>Offline</div>
							<div>I would like to use influencer content for offline purposes (i.e. retail displays, hang tags, out of home (OOH) advertising, etc)</div>
							<i class="fa fa-check-square" aria-hidden="true"></i>
						</div></label>
						<input type="radio" value="Digital + Offline" id="q63_3" name="q63">
						<label class="radio1" for="q63_3">
							<div>
								<div>Digital + Offline</div>
								<div></div>
								<i class="fa fa-check-square" aria-hidden="true"></i>
						</div>
						</label>
						<input type="radio" value="Sustain" id="q63_4" name="q63">
						<label class="radio1" for="q63_4">
							<div>
								<div>Sustain</div>
								<div>365 pieces of content</div>
								<i class="fa fa-check-square" aria-hidden="true"></i>
						</div>
						</label>
					</div>
				</div>
			</div>  end tab -->
	<!--		<div class="end"></div>
			<div class="tab">
				<div class="question">
					<div class="h">Product Shipping</div>
					<p>If you would like influencers to incorporate your product into their content, we can facilitate shipping or provide you with the influencers’ mailing addresses to ship to them directly.</p>
				</div>
				<div class="answer">
					<div class="radio">
						<input type="radio" id="q64_1" value="I will send products direct" name="q64">
						<label class="radio1" for="q64_1">
							<div>
								<div>I will send products direct</div>
								<div>No fee will be applied</div>
								<i class="fa fa-check-square" aria-hidden="true"></i>
							</div>
						</label>
						<input type="radio" value="#paid will send products" id="q64_2" name="q64">
						<label class="radio1" for="q64_2"><div>
							<div>#paid will send products</div>
							<div>A fee of 2% of gross spend will be applied to your invoice</div>
							<i class="fa fa-check-square" aria-hidden="true"></i>
						</div></label>
					</div>
				</div>
			</div>  end tab -->
	<!--		<div class="end"></div>
			<div class="tab">
				<div class="question">
					<div class="h">Summary</div>
				</div>
				<div class="answer">
					<div class="text-claire">
							<span class="fl">Influencer Collaborations</span> 
							<span class="fr">$100,000</span>
					</div>
					<div class="text-claire">
							<span class="fl">Branded Content</span>
							<span class="fr">$70,000</span>
					</div>
					<div class="text-claire">
							<span class="fl">Product Shipping</span>
							<span class="fr">$3,400</span>
					</div>
					<div class="text-claire">
							<span class="fl">Total</span>
							<span class="fr">$173,400*</span>
					</div>
					<div class="text-claire">
							<span class="fr">*subject to local taxes</span>
					</div>
					
				</div>
			</div>  end tab -->
		</div> <!-- end page -->

		<div pos="7" class="page">
			<div class="tab">
				<div class="question">
					<div class="h">Information Personal</div>
					<p></p>
				</div>
				<div class="answer">
					<div class="">
						<div class="text-bold">
							First name *
						</div>
						<input id="q71" class="input-text" type="text" name="q71">
					</div>
					<div class="">
						<div class="text-bold">
							Last name *
						</div>
						<input id="q72" class="input-text" type="text" name="q72">
					</div>
					<div class="">
						<div class="text-bold">
							Email *
						</div>
						<input id="q73" class="input-text" type="email" name="q73">
					</div>
					<div class="">
						<div class="text-bold">
							Phone number *
						</div>
						<input id="q74" class="input-text" type="tel" name="q74">
					</div>
			<!--		<div class="">
						<div class="text-bold">
							Where do you work?
						</div>
						<input class="input-text" type="text" name="q75">
					</div> -->
					<div class="">
						<div class="text-bold">
							Monthly marketing budget
						</div>
						<input class="input-text" type="text" name="q76">
					</div>
					<div class="">
						<div class="text-bold">
							How did you hear about us?
						</div>
						<select id="q77" name="q77">
							<option value="">Please select</option>
							<option value="Contact with #paid brand strategist">Contact with #paid brand strategist</option>
							<option value="In-person Event/Conference">In-person Event/Conference</option>
							<option value="Facebook">Facebook</option>
							<option value="LinkedIn">LinkedIn</option>
							<option value="Twitter">Twitter</option>
							<option value="Instagram">Instagram</option>
							<option value="Google search">Google search</option>
							<option value="Colleague">Colleague</option>
							<option value="#paid Blog">#paid Blog</option>
							<option value="News article">News article</option>
							<option value="Other">Other</option>
						</select>
					</div>

					<div id="submit">
						<button name="submit_rfp" id="submit_form" type="submit">SUBMIT</button>
					</div>

				</div>
			</div> <!-- end tab -->
		</div> <!-- end page -->

			</form>
		</section>
		<div id="rfp-controls">
			<div>
				<button id="back">BACK</button>
				<button id="next">NEXT</button>
			</div>
		</div>
		
</div>
