					<ul class="social">
					
					<?php if(get_field('in', 'option')){ ?>
						<li class="soc in"><a href="<?php the_field('in', 'option'); ?>" target="_blank"> <svg viewBox="0 0 24 24"><path d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z" /></svg></a></li>
					<?php } ?>
					
					<?php if(get_field('yt', 'option')){ ?>
						<li class="soc yt"><a href="<?php the_field('yt', 'option'); ?>" target="_blank"> <svg xmlns="http://www.w3.org/2000/svg" ><path d="M10 15l5.2-3L10 9v6m11.56-7.83c.13.47.22 1.1.28 1.9.07.8.1 1.5.1 2.1L22 12c0 2.2-.16 3.8-.44 4.83-.25.9-.83 1.48-1.73 1.73-.47.13-1.33.22-2.65.28-1.3.07-2.5.1-3.6.1L12 19c-4.2 0-6.8-.16-7.83-.44-.9-.25-1.48-.83-1.73-1.73-.13-.47-.22-1.1-.28-1.9-.07-.8-.1-1.5-.1-2.1L2 12c0-2.2.16-3.8.44-4.83.25-.9.83-1.48 1.73-1.73.47-.13 1.33-.22 2.65-.28 1.3-.07 2.5-.1 3.6-.1L12 5c4.2 0 6.8.16 7.83.44.9.25 1.48.83 1.73 1.73z"/></svg></a></li>
					<?php } ?>
					
					<?php if(get_field('vk', 'option')){ ?>
						<li class="soc vk"><a href="<?php the_field('vk', 'option'); ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg"><path d="M20.8 7.74c.13-.42 0-.74-.62-.74h-2.02a.87.87 0 00-.88.57s-1.03 2.51-2.49 4.15c-.48.47-.69.62-.95.62-.13 0-.34-.15-.34-.58V7.74c0-.51-.12-.74-.55-.74H9.76c-.32 0-.51.24-.51.47 0 .48.75.6.8 1.97v2.98c0 .66-.12.78-.37.78-.68 0-2.36-2.53-3.35-5.41-.2-.56-.39-.79-.91-.79H3.39c-.57 0-.69.27-.69.57 0 .54.69 3.2 3.2 6.72C7.57 16.7 9.93 18 12.08 18c1.29 0 1.45-.29 1.45-.79v-1.82c0-.57.12-.69.53-.69.3 0 .81.15 2.01 1.3 1.38 1.38 1.6 2 2.38 2h2.02c.58 0 .87-.29.71-.86-.18-.57-.84-1.4-1.71-2.38-.47-.55-1.18-1.15-1.4-1.46-.3-.38-.21-.55 0-.9 0 0 2.47-3.47 2.73-4.66z"/></svg></a></li>
					<?php } ?>
					
					<?php if(get_field('fb', 'option')){ ?>
						<li class="soc fb"><a href="<?php the_field('fb', 'option'); ?>" target="_blank"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 24 24"><path d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z" /></svg></a></li>
					<?php } ?>
					
					<?php if(get_field('wa', 'option')){ ?>
						<li class="soc wa">
							<a href="https://api.whatsapp.com/send?phone=7<?php echo substr(preg_replace('#[^\d]#','',get_field('wa', 'option')), 1); ?>" target="_blank">
								<svg viewBox="0 0 24 24">
								<path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8 12.27C8.14 12.44 9.76 14.94 12.25 16C12.84 16.27 13.3 16.42 13.66 16.53C14.25 16.72 14.79 16.69 15.22 16.63C15.7 16.56 16.68 16.03 16.89 15.45C17.1 14.87 17.1 14.38 17.04 14.27C16.97 14.17 16.81 14.11 16.56 14C16.31 13.86 15.09 13.26 14.87 13.18C14.64 13.1 14.5 13.06 14.31 13.3C14.15 13.55 13.67 14.11 13.53 14.27C13.38 14.44 13.24 14.46 13 14.34C12.74 14.21 11.94 13.95 11 13.11C10.26 12.45 9.77 11.64 9.62 11.39C9.5 11.15 9.61 11 9.73 10.89C9.84 10.78 10 10.6 10.1 10.45C10.23 10.31 10.27 10.2 10.35 10.04C10.43 9.87 10.39 9.73 10.33 9.61C10.27 9.5 9.77 8.26 9.56 7.77C9.36 7.29 9.16 7.35 9 7.34C8.86 7.34 8.7 7.33 8.53 7.33Z" /></svg>
							</a>
						</li>
					<?php } ?>
					
					<?php if(get_field('tg', 'option')){ ?>
						<li class="soc tg">
							<a href="https://t.me/<?php echo get_field('tg', 'option'); ?>" target="_blank">
								<svg viewBox="0 -39 512.00011 512" xmlns="http://www.w3.org/2000/svg"><path d="m504.09375 11.859375c-6.253906-7.648437-15.621094-11.859375-26.378906-11.859375-5.847656 0-12.042969 1.230469-18.410156 3.664062l-433.398438 165.441407c-23 8.777343-26.097656 21.949219-25.8984375 29.019531s4.0390625 20.046875 27.4999995 27.511719c.140626.042969.28125.085937.421876.125l89.898437 25.726562 48.617187 139.023438c6.628907 18.953125 21.507813 30.726562 38.835938 30.726562 10.925781 0 21.671875-4.578125 31.078125-13.234375l55.605469-51.199218 80.652344 64.941406c.007812.007812.019531.011718.027343.019531l.765625.617187c.070313.054688.144532.113282.214844.167969 8.964844 6.953125 18.75 10.625 28.308594 10.628907h.003906c18.675781 0 33.546875-13.824219 37.878906-35.214844l71.011719-350.640625c2.851563-14.074219.460937-26.667969-6.734375-35.464844zm-356.191406 234.742187 173.441406-88.605468-107.996094 114.753906c-1.769531 1.878906-3.023437 4.179688-3.640625 6.683594l-20.824219 84.351562zm68.132812 139.332032c-.71875.660156-1.441406 1.25-2.164062 1.792968l19.320312-78.25 35.144532 28.300782zm265.390625-344.566406-71.011719 350.644531c-.683593 3.355469-2.867187 11.164062-8.480468 11.164062-2.773438 0-6.257813-1.511719-9.824219-4.257812l-91.390625-73.585938c-.011719-.011719-.027344-.023437-.042969-.03125l-54.378906-43.789062 156.175781-165.949219c5-5.3125 5.453125-13.449219 1.074219-19.285156-4.382813-5.835938-12.324219-7.671875-18.820313-4.351563l-256.867187 131.226563-91.121094-26.070313 433.265625-165.390625c3.660156-1.398437 6.214844-1.691406 7.710938-1.691406.917968 0 2.550781.109375 3.15625.855469.796875.972656 1.8125 4.289062.554687 10.511719zm0 0"/></svg>
							</a>
						</li>	
					<?php } ?>				
					</ul>